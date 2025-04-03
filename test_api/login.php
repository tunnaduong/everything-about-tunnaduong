<?php
include('serverconnect.php');

$username = $decodedData['username'];
$password = $decodedData['password']; //password is hashed

$SQL = "SELECT * FROM users WHERE username = '$username'";
$exeSQL = mysqli_query($conn, $SQL);
$checkUsername =  mysqli_num_rows($exeSQL);

if ($checkUsername != 0) {
    $arrayu = mysqli_fetch_array($exeSQL);
    if ($arrayu['password'] != $password) {
        $Message = "Wrong password!";
        $GLOBALS['response'][] = array("Message" => $Message);
    } else {
        $Message = "Success!";
        $Name = $arrayu['name'];
        $Role = $arrayu['role'];
        $GLOBALS['response'][] = array("Message" => $Message, "Username" => $username, "Name" => $Name, "Role" => $Role);
    }
} else {
    if ($username != "" && $password != "") {
        $Message = "No account found!";
        $GLOBALS['response'][] = array("Message" => $Message);
    } else {
        $Message = "Please enter the information completely!";
        $GLOBALS['response'][] = array("Message" => $Message);
    }
}

echo json_encode($response);