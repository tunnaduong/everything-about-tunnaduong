<?php

namespace App\Controllers;

use App\Models\Home;

class HomeController extends BaseController
{
  public $home;

  public function __construct()
  {
    $this->home = new Home();
  }

  public function index()
  {
    $diaries = $this->home->getDiary();
    $podcasts = $this->home->getPodcasts();
    $podcast_debug = $this->home->getPodcastDebug();

    $people = $this->home->getPeople('recent', 'all');
    foreach ($people as $person) {
      $person->slug = $this->home->slugify($person->name);
    }

    return $this->render('pages.home.index', compact('diaries', 'podcasts', 'podcast_debug', 'people'));
  }

  public function about()
  {
    $projects = $this->home->getTop6Projects();
    return $this->render('pages.about.index', compact('projects'));
  }

  public function everyday()
  {
    $diaries = $this->home->getEveryday();
    return $this->render('pages.diary.index', compact('diaries'));
  }

  public function people()
  {
    $sort = $_GET['sort'] ?? 'recent';
    $context = $_GET['context'] ?? 'all';
    $people = $this->home->getPeople($sort, $context);
    foreach ($people as $person) {
      $person->slug = $this->home->slugify($person->name);
    }
    return $this->render('pages.people.index', compact('people', 'sort', 'context'));
  }

  public function person_detail($name)
  {
    $person = $this->home->getPersonBySlug($name);
    if (!$person) {
      return $this->error404();
    }
    $memories = $this->home->getMemoriesByPersonId($person->id);
    return $this->render('pages.people.detail', compact('person', 'memories'));
  }

  public function project($project_id)
  {
    $project = $this->home->getProject($project_id);
    // check if project is not found
    if (!$project) {
      return $this->error404();
    }
    return $this->render('pages.project.index', compact('project'));
  }

  public function what_i_do()
  {
    $projects = $this->home->getAllITProjects();
    $engineering_projects = $this->home->getAllEngineeringProjects();
    $design_projects = $this->home->getAllDesignProjects();
    $filming_projects = $this->home->getAllFilmingProjects();
    return $this->render('pages.what-i-do.index', compact('projects', 'engineering_projects', 'design_projects', 'filming_projects'));
  }

  public function connect_with_me()
  {
    return $this->render('pages.connect-with-me.index');
  }

  public function write_for_me()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $come_from = $_POST['come_from'];
      $web = $_POST['web'];
      $gender = $_POST['gender'] ?? '';
      $have_we_met = $_POST['have_we_met'] ?? '';
      $why_we_met = $_POST['why_we_met'];
      $our_memory = $_POST['our_memory'];
      $i_am = $_POST['i_am'];
      $dislike = $_POST['dislike'];
      $some_lines = $_POST['some_lines'];
      $signature = $_POST['signature_data'];

      // Save to database
      $this->home->writeForMe($name, $email, $come_from, $web, $gender, $have_we_met, $why_we_met, $our_memory, $i_am, $dislike, $some_lines, $signature);

      // Send notification to ntfy.sh
      $this->sendNtfyNotification($name, $email, $come_from, $some_lines);

      return $this->render('pages.write-for-me.index', ['success' => true]);
    }
    return $this->render('pages.write-for-me.index');
  }

  private function sendNtfyNotification($name, $email, $come_from, $some_lines)
  {
    $message = "📝 Có người viết cho bạn!\n\n";
    $message .= '👤 Tên: ' . $name . "\n";

    if (!empty($email)) {
      $message .= '📧 Email: ' . $email . "\n";
    }

    if (!empty($come_from)) {
      $message .= '📍 Đến từ: ' . $come_from . "\n";
    }

    if (!empty($some_lines)) {
      $message .= '💬 Lời nhắn: ' . substr($some_lines, 0, 100) . (strlen($some_lines) > 100 ? '...' : '') . "\n";
    }

    $message .= "\n🔗 Xem chi tiết tại: http://db.tunnaduong.com/tunna/index.php?route=/sql&db=luubut&table=luubut";

    // Send notification via ntfy.sh
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://ntfy.sh/tunna-alerts');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $message);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
      'Title: Có người viết cho bạn! 📝',
      'Priority: high',
      'Tags: letter,writing,notification'
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    $result = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    // Log the result (optional)
    error_log('Ntfy notification sent. HTTP Code: ' . $httpCode . ', Result: ' . $result);
  }

  public function error404()
  {
    return $this->render('pages.error.404');
  }
}
