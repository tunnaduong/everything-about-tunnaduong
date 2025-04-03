<?php
include('serverconnect.php');

include("jsonobj.php");

if ($_GET && $_GET['access_token'] == "abc123") {
    $SQL = "SELECT * FROM users";
    $result = $conn->query($SQL);
    if ($result->num_rows > 0) {
        $jsonObj = new jsonOBJ("users_info");
        while ($row = $result->fetch_assoc()) {
            // add items using one of two methods
            $jsonObj->push(json_decode("{\"id\":\"" . $row['id'] . "\",\"name\":\"" . $row['name'] . "\",\"username\":\"" . $row['username'] . "\",\"password\":\"" . $row['password'] . "\",\"role\":\"" . $row['role'] . "\"}", true)); // from a JSON String
        }
        echo $jsonObj->toString();
    } else {
        $Message = "No user found!";
        $GLOBALS['response'][] = array("message" => $Message);
        echo json_encode($response);
    }
} else {
    $Message = "Access Denied!";
    $GLOBALS['response'][] = array("message" => $Message);
    echo json_encode($response);
}