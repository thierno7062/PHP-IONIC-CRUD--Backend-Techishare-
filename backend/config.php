<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
header('Access-Control-Allow-Headers: token, Content-Type');
header('Access-Control-Max-Age: 1728000');
header('Content-length: 0');
header('Content-Type: text/plain');
$con = mysqli_connect("localhost", "root", "", "ionic-php-crud") or die ("could not connect DB");

?>