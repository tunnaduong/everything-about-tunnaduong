<?php
$appsecret = 'idontknow';
$raw_post_data = file_get_contents('php://input');
echo $_GET['hub_challenge'];
echo $raw_post_data;