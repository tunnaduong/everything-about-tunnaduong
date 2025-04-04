<?php
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: *");

/**
 * @param $value
 * @return mixed
 */
function escapeJsonString($value)
{ # list from www.json.org: (\b backspace, \f formfeed)
    $escapers = array("\\", "/", "\"", "\n", "\r", "\t", "\x08", "\x0c");
    $replacements = array("\\\\", "\\/", "\\\"", "\\n", "\\r", "\\t", "\\f", "\\b");
    $result = str_replace($escapers, $replacements, $value);
    return $result;
}

$maychu = "localhost";
$tendangnhap = "tunnaduong_fb-live-chat";
$matkhau = "Tunganh2003";
$tendb = "tunnaduong_fb-live-chat";
$db = mysqli_connect($maychu, $tendangnhap, $matkhau, $tendb);
// mysqli_set_charset($db, 'UTF8');

$encodedData = file_get_contents('php://input');
$decodedData = json_decode($encodedData, true);

$content = $decodedData['content'];

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($content) && !empty($content)) {
    // Fetch existing data
    $sql = "SELECT data FROM live_comments WHERE id=1";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $existingData = json_decode($row['data'], true);
    } else {
        $existingData = [];
    }

    // Append new content to existing data
    $existingData[] = $content;

    // Encode updated data back to JSON
    $updatedData = json_encode($existingData, JSON_UNESCAPED_UNICODE);

    // Update the database with the new data
    $stmt = $db->prepare("UPDATE live_comments SET data=? WHERE id=1");
    $stmt->bind_param("s", $updatedData);
    if ($stmt->execute() === true) {
        $status = "success";
    } else {
        $status = $stmt->error;
    }
    echo json_encode(array("status" => $status, "content" => $existingData), JSON_UNESCAPED_UNICODE);
} elseif ($_SERVER['REQUEST_METHOD'] == "POST") {
    echo json_encode(array("status" => "error", "error" => "Wrong POST params!"));
}

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $sql = "SELECT data FROM live_comments";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo json_encode(array("status" => "success", "content" => json_decode($row['data'], true)), JSON_UNESCAPED_UNICODE);
    } else {
        echo json_encode(array("status" => "error", "error" => "Empty data!"));
    }
    $db->close();
}