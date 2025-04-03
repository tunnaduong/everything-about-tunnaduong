<?php
// $url = "https://findidfb.com/";

// $curl = curl_init($url);
// curl_setopt($curl, CURLOPT_URL, $url);
// curl_setopt($curl, CURLOPT_POST, true);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// $headers = array(
//     "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.75 Safari/537.36",
//     "Content-Type: application/x-www-form-urlencoded",
// );
// curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

// $data = "url_facebook=https://www.facebook.com/tunna.duong";

// curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

// //for debug only!
// curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
// curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

// $resp = curl_exec($curl);
// curl_close($curl);

// preg_match('/Numeric ID: <b>(.*?)<\/b>/', $resp, $matches);

// $a['uid'] = $matches[1];
// $a['avatar_url'] = "https://graph.facebook.com/" . $a['uid'] . "/picture?type=large&width=100&height=100&access_token=" . $access_token;
// $a['comment'] = htmlspecialchars($a['comment']);

// echo $a['uid'];
// echo "\n" . $a['avatar_url'];





$url = "https://findidfb.com/";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
    "Content-Type: application/x-www-form-urlencoded",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = "url_facebook=https://www.facebook.com/tunna.duong";

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($curl);
echo $response; // Google's HTML source will be printed
curl_close($curl);