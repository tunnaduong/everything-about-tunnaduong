<?php
// Allow requests from any origin (use with caution)
header("Access-Control-Allow-Origin: *");
// Allow specific headers (optional)
header("Access-Control-Allow-Headers: *");
header('Content-Type: application/json');

// Database connection settings
$servername = "localhost";  // Use "127.0.0.1" if "localhost" doesn't work
$username = "diemthi";
$password = "tunganh2003";
$dbname = "diemthi";

// Create a connection to the MySQL database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die(json_encode(['error' => "Connection failed: " . $conn->connect_error]));
}

// Handle POST request (saving data)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the raw POST data
    $input = json_decode(file_get_contents('php://input'), true);

    if (isset($input['content'])) {
        $content = $conn->real_escape_string($input['content']); // Sanitize the input

        // Prepare the SQL query to insert data
        $sql = "INSERT INTO captcha (content) VALUES ('$content')";

        if ($conn->query($sql) === TRUE) {
            echo json_encode(['success' => "New record created successfully"]);
        } else {
            echo json_encode(['error' => "Error: " . $sql . "<br>" . $conn->error]);
        }
    } else {
        echo json_encode(['error' => "No content provided"]);
    }
}
// Handle GET request (retrieving only the latest data)
else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Prepare the SQL query to retrieve only the latest data
    $sql = "SELECT * FROM captcha ORDER BY created_at DESC LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch the latest row as an associative array
        $row = $result->fetch_assoc();
        echo json_encode($row); // Return the latest data as JSON
    } else {
        echo json_encode(['message' => "No records found"]);
    }
} else {
    // If method is neither POST nor GET, return an error
    echo json_encode(['error' => "Unsupported request method"]);
}

// Close the database connection
$conn->close();
?>