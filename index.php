<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('log_errors', '1');
ini_set('error_log', __DIR__ . '/storage/logs/php-error.log');

session_start();
include "env.php";
include "vendor/autoload.php";
include "common/route.php";
