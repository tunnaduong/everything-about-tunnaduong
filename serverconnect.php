<?php
$maychu = "103.81.85.224";
$tendangnhap = "tunnaduong_everything";
$matkhau = "Tunganh2003";
$tendb = "tunnaduong_everything";
$db = mysqli_connect($maychu, $tendangnhap, $matkhau, $tendb);
$db2 = mysqli_connect($maychu, "tunnaduong_everyday", $matkhau, "tunnaduong_everyday");
$db3 = mysqli_connect($maychu, "tunnaduong_blog", $matkhau, "tunnaduong_blog");
$db4 = mysqli_connect($maychu, "tunnaduong_luubut", $matkhau, "tunnaduong_luubut");
$servername = $maychu;
$username = $tendangnhap;
$password = $matkhau;
$dbname = $tendb;
$conn = new mysqli($servername, $username, $password, $dbname);
$DATABASE_HOST = $maychu;
$DATABASE_USER = $tendangnhap;
$DATABASE_PASS = $matkhau;
$DATABASE_NAME = $tendb;
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
mysqli_set_charset($conn, 'UTF8');
mysqli_set_charset($db, 'UTF8');
mysqli_set_charset($db2, 'UTF8');
mysqli_set_charset($db3, 'UTF8');
mysqli_set_charset($db4, 'UTF8');
mysqli_set_charset($con, 'UTF8');
$link = mysqli_connect($maychu, $tendangnhap, $matkhau, $tendb);
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
