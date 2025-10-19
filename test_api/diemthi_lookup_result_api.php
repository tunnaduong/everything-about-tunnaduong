<?php
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");

include "../env.php";

// Database connection parameters
$host = DBHOST;
$db = 'diemthi';
$user = 'diemthi';
$pass = DBPASS;
$charset = 'utf8mb4';

// Connect to DB
$mysqli = new mysqli($host, $user, $pass, $db);
if ($mysqli->connect_errno) {
  http_response_code(500);
  echo json_encode(['error' => 'Database connection failed']);
  exit;
}

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'GET') {
  // Return last 5 results ordered by created_at DESC
  $sql = "SELECT MIN(id) as id, name, school, class, MIN(created_at) as created_at
FROM lookup_results
GROUP BY name, school
ORDER BY created_at DESC LIMIT 5
";
  $result = $mysqli->query($sql);
  if (!$result) {
    http_response_code(500);
    echo json_encode(['error' => 'Failed to fetch results']);
    $mysqli->close();
    exit;
  }

  $data = [];
  while ($row = $result->fetch_assoc()) {
    $data[] = $row;
  }

  echo json_encode(['results' => $data]);
  $mysqli->close();
  exit;
}

if ($method === 'POST') {
  $input = json_decode(file_get_contents('php://input'), true);
  if (!is_array($input)) {
    $input = $_POST;
  }

  // Lấy dữ liệu
  $name = $input['name'] ?? null;
  $school = $input['school'] ?? null;
  $class = $input['class'] ?? null;
  $student_id = $input['student_id'] ?? null;
  $sex = $input['sex'] ?? null;
  $birth_date = $input['birth_date'] ?? null;

  // Convert birth_date to Y-m-d
  if (!empty($birth_date)) {
    $birth_date = date('Y-m-d', strtotime($birth_date));
  }

  // Kiểm tra đủ dữ liệu
  if (!$name || !$school || !$class || !$student_id) {
    http_response_code(400);
    echo json_encode(['error' => 'Thiếu thông tin bắt buộc']);
    $mysqli->close();
    exit;
  }

  // Thêm vào CSDL
  $stmt = $mysqli->prepare("INSERT INTO lookup_results (name, school, class, student_id, sex, birth_date) VALUES (?, ?, ?, ?, ?, ?)");
  if ($stmt === false) {
    http_response_code(500);
    echo json_encode(['error' => 'Query preparation failed']);
    $mysqli->close();
    exit;
  }

  $stmt->bind_param("ssssis", $name, $school, $class, $student_id, $sex, $birth_date);
  $success = $stmt->execute();

  if ($success) {
    echo json_encode(['success' => true, 'id' => $stmt->insert_id]);
  } else {
    http_response_code(500);
    echo json_encode(['error' => 'Insert failed']);
  }

  $stmt->close();
  $mysqli->close();
  exit;
}


// Handle preflight OPTIONS request
if ($method === 'OPTIONS') {
  header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
  header("Access-Control-Allow-Headers: Content-Type, Authorization");
  header("Access-Control-Max-Age: 86400");
  http_response_code(200);
  exit;
}

http_response_code(405);
echo json_encode(['error' => 'Method not allowed']);
$mysqli->close();
exit;