<?php

namespace App\Models;

class Home extends BaseModel
{
  private $podcast_debug = [];

  public function getDiary()
  {
    $sql = "SELECT * FROM everyday.timeline ORDER BY id DESC LIMIT 3";
    $this->setQuery($sql);
    return $this->loadAllRows();
  }

  public function getBlog()
  {
    $sql = "SELECT * FROM tunnaduong_blog.wp_posts WHERE post_type = 'post' AND post_name != 'quote' AND post_status != 'draft' AND post_status != 'auto-draft' ORDER BY id DESC LIMIT 3;";
    $this->setQuery($sql);
    return $this->loadAllRows();
  }

  public function getPodcasts($limit = 3)
  {
    $feeds = [
      "https://radio.tunnaduong.com/gac-nho-cua-tung/?format=xml",
      "https://radio.tunnaduong.com/chuyen-quan-quen/?format=xml",
    ];

    $items = [];

    if (class_exists(\SimplePie\SimplePie::class)) {
      $this->logPodcast("Using SimplePie for RSS parsing.");
      $cacheDir = __DIR__ . "/../../storage/simplepie-cache";
      if (!is_dir($cacheDir)) {
        @mkdir($cacheDir, 0777, true);
      }

      $feedObjects = [];
      foreach ($feeds as $feed_url) {
        $feed = new \SimplePie\SimplePie();
        $feed->set_feed_url($feed_url);
        $feed->enable_cache(true);
        $feed->set_cache_location($cacheDir);
        $feed->set_useragent('PodcastFetcher/1.0');
        $feed->init();
        $feed->handle_content_type();

        if ($feed->error()) {
          $this->logPodcast("SimplePie error for feed: " . $feed_url . " | " . $feed->error());
          continue;
        }

        $feedObjects[] = $feed;
      }

      $allItems = \SimplePie\SimplePie::merge_items($feedObjects);
      foreach ($allItems as $item) {
        $title = trim((string) $item->get_title());
        $link = trim((string) $item->get_link());
        $pub_date = (string) $item->get_date('r');
        $timestamp = strtotime($pub_date);

        if ($title === "" || $link === "") {
          continue;
        }

        $row = new \stdClass();
        $row->id = md5($title . "|" . $link . "|" . $pub_date);
        $row->title = $title;
        $row->link = $link;
        $row->pub_date = $pub_date;
        $row->timestamp = $timestamp ? $timestamp : 0;
        $items[] = $row;
      }
    } else {
      foreach ($feeds as $feed_url) {
        $this->logPodcast("Fetching feed: " . $feed_url);
        $xml = $this->fetchXml($feed_url);
        if (!$xml || !isset($xml->channel->item)) {
          $this->logPodcast("No items for feed: " . $feed_url);
          continue;
        }

        foreach ($xml->channel->item as $item) {
          $title = trim((string) $item->title);
          $link = trim((string) $item->link);
          $pub_date = trim((string) $item->pubDate);
          $timestamp = strtotime($pub_date);

          if ($title === "" || $link === "") {
            continue;
          }

          $row = new \stdClass();
          $row->id = md5($title . "|" . $link . "|" . $pub_date);
          $row->title = $title;
          $row->link = $link;
          $row->pub_date = $pub_date;
          $row->timestamp = $timestamp ? $timestamp : 0;
          $items[] = $row;
        }
      }
    }

    usort($items, function ($a, $b) {
      return $b->timestamp <=> $a->timestamp;
    });

    $this->logPodcast("Total items collected: " . count($items));
    return array_slice($items, 0, $limit);
  }

  private function fetchXml($url)
  {
    $response = null;
    $meta = [];

    if (!function_exists('simplexml_load_string')) {
      $this->logPodcast("simplexml extension not available.");
      return null;
    }

    if (function_exists('curl_init')) {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_TIMEOUT, 10);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_USERAGENT, 'PodcastFetcher/1.0');
      curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Accept: application/rss+xml, application/xml, text/xml;q=0.9, */*;q=0.8',
      ]);
      $response = curl_exec($ch);
      $meta = [
        'http_code' => curl_getinfo($ch, CURLINFO_HTTP_CODE),
        'content_type' => curl_getinfo($ch, CURLINFO_CONTENT_TYPE),
      ];
      curl_close($ch);
    }

    if (!$response && function_exists('file_get_contents')) {
      $context = stream_context_create([
        'http' => [
          'method' => 'GET',
          'timeout' => 10,
          'header' => "User-Agent: PodcastFetcher/1.0\r\n" .
            "Accept: application/rss+xml, application/xml, text/xml;q=0.9, */*;q=0.8\r\n",
        ],
        'ssl' => [
          'verify_peer' => false,
          'verify_peer_name' => false,
        ],
      ]);
      $response = @file_get_contents($url, false, $context);
      if (isset($http_response_header) && is_array($http_response_header)) {
        $meta['headers'] = implode(" | ", $http_response_header);
      }
    }

    if (!$response) {
      $this->logPodcast("Fetch failed for URL: " . $url);
      return null;
    }

    $snippet = substr($response, 0, 200);
    $this->logPodcast("Fetch meta for URL: " . $url . " | http_code=" . ($meta['http_code'] ?? 'n/a') . " | content_type=" . ($meta['content_type'] ?? 'n/a'));
    $this->logPodcast("Response snippet: " . preg_replace('/\\s+/', ' ', $snippet));

    libxml_use_internal_errors(true);
    $xml = simplexml_load_string($response);
    if (!$xml) {
      $errors = libxml_get_errors();
      $this->logPodcast("XML parse failed for URL: " . $url . " | errors: " . count($errors) . " | response_len: " . strlen($response));
    }
    libxml_clear_errors();

    return $xml ?: null;
  }

  private function logPodcast($message)
  {
    $primary = __DIR__ . "/../../storage/logs/podcast-debug.log";
    $fallback = sys_get_temp_dir() . "/podcast-debug.log";
    $logFile = is_writable(dirname($primary)) ? $primary : $fallback;
    $line = "[" . date('c') . "] " . $message . PHP_EOL;
    $this->podcast_debug[] = $line;
    @file_put_contents($logFile, $line, FILE_APPEND);
  }

  public function getPodcastDebug()
  {
    return $this->podcast_debug;
  }

  public function getEveryday()
  {
    $sql = "SELECT * FROM everyday.timeline ORDER BY id DESC";
    $this->setQuery($sql);
    return $this->loadAllRows();
  }

  public function getPeople($sort = 'recent', $context = 'all')
  {
    $sortMap = [
      'recent' => 'p.met_from DESC',
      'oldest' => 'p.met_from ASC',
      'memories_desc' => 'memories_count DESC, p.met_from DESC',
      'age_desc' => 'p.date_of_birth ASC',
      'age_asc' => 'p.date_of_birth DESC',
    ];

    $orderBy = $sortMap[$sort] ?? $sortMap['recent'];

    $where = [];
    if ($context !== 'all') {
      $allowedContexts = ['school', 'work', 'hobby'];
      if (in_array($context, $allowedContexts, true)) {
        $where[] = "p.context_group = '" . $context . "'";
      }
    }

    $whereSql = $where ? ("WHERE " . implode(" AND ", $where)) : "";

    $sql = "SELECT p.id, p.name, p.met_from, p.date_of_birth, p.avatar, COUNT(m.person_id) AS memories_count
            FROM people AS p
            LEFT JOIN memories AS m ON p.id = m.person_id
            {$whereSql}
            GROUP BY p.id";

    if ($sort === 'memories_zero') {
      $sql .= " HAVING COUNT(m.person_id) = 0";
    }

    $sql .= " ORDER BY {$orderBy}";

    $this->setQuery($sql);
    return $this->loadAllRows();
  }

  public function getTop6Projects()
  {
    $sql = "SELECT * FROM " . DBNAME . ".projects ORDER BY created_at DESC LIMIT 6";
    $this->setQuery($sql);
    return $this->loadAllRows();
  }

  public function getPersonBySlug($slug)
  {
    $sql = "SELECT * FROM people";
    $this->setQuery($sql);
    $people = $this->loadAllRows();
    foreach ($people as $person) {
      if ($this->slugify($person->name) === $slug) {
        return $person;
      }
    }
    return null;
  }

  public function slugify($text)
  {
    $text = trim($text);
    $text = mb_strtolower($text, 'UTF-8');
    $map = [
      'à'=>'a','á'=>'a','ạ'=>'a','ả'=>'a','ã'=>'a',
      'â'=>'a','ầ'=>'a','ấ'=>'a','ậ'=>'a','ẩ'=>'a','ẫ'=>'a',
      'ă'=>'a','ằ'=>'a','ắ'=>'a','ặ'=>'a','ẳ'=>'a','ẵ'=>'a',
      'è'=>'e','é'=>'e','ẹ'=>'e','ẻ'=>'e','ẽ'=>'e',
      'ê'=>'e','ề'=>'e','ế'=>'e','ệ'=>'e','ể'=>'e','ễ'=>'e',
      'ì'=>'i','í'=>'i','ị'=>'i','ỉ'=>'i','ĩ'=>'i',
      'ò'=>'o','ó'=>'o','ọ'=>'o','ỏ'=>'o','õ'=>'o',
      'ô'=>'o','ồ'=>'o','ố'=>'o','ộ'=>'o','ổ'=>'o','ỗ'=>'o',
      'ơ'=>'o','ờ'=>'o','ớ'=>'o','ợ'=>'o','ở'=>'o','ỡ'=>'o',
      'ù'=>'u','ú'=>'u','ụ'=>'u','ủ'=>'u','ũ'=>'u',
      'ư'=>'u','ừ'=>'u','ứ'=>'u','ự'=>'u','ử'=>'u','ữ'=>'u',
      'ỳ'=>'y','ý'=>'y','ỵ'=>'y','ỷ'=>'y','ỹ'=>'y',
      'đ'=>'d',
    ];
    $text = strtr($text, $map);
    $text = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $text);
    $text = preg_replace('/[^a-z0-9]+/', '-', $text);
    $text = trim($text, '-');
    return $text;
  }

  public function getMemoriesByPersonId($person_id)
  {
    $sql = "SELECT * FROM memories WHERE person_id = '{$person_id}' ORDER BY time DESC";
    $this->setQuery($sql);
    return $this->loadAllRows();
  }

  public function getAllITProjects()
  {
    $sql = "SELECT * FROM " . DBNAME . ".projects WHERE type = 'IT' ORDER BY created_at DESC";
    $this->setQuery($sql);
    return $this->loadAllRows();
  }

  public function getAllEngineeringProjects()
  {
    $sql = "SELECT * FROM " . DBNAME . ".projects WHERE type = 'Engineer' ORDER BY created_at DESC";
    $this->setQuery($sql);
    return $this->loadAllRows();
  }

  public function getAllDesignProjects()
  {
    $sql = "SELECT * FROM " . DBNAME . ".projects WHERE type = 'Design' ORDER BY created_at DESC";
    $this->setQuery($sql);
    return $this->loadAllRows();
  }

  public function getAllFilmingProjects()
  {
    $sql = "SELECT * FROM " . DBNAME . ".projects WHERE type = 'Film' ORDER BY created_at DESC";
    $this->setQuery($sql);
    return $this->loadAllRows();
  }

  public function getProject($project_id)
  {
    $sql = "SELECT * FROM " . DBNAME . ".projects WHERE project_id = '$project_id'";
    $this->setQuery($sql);
    return $this->loadRow();
  }

  public function writeForMe($name, $email, $come_from, $web, $gender, $have_we_met, $why_we_met, $our_memory, $i_am, $dislike, $some_lines, $signature)
  {
    $sql = "INSERT INTO luubut.luubut (name, email, comefrom, web, gender, havewemet, whywemet, ourmemory, iam, dislike, somelines, signature_data) VALUES ('$name', '$email', '$come_from', '$web', '$gender', '$have_we_met', '$why_we_met', '$our_memory', '$i_am', '$dislike', '$some_lines', '$signature')";
    $this->setQuery($sql);
    return $this->execute();
  }
}
