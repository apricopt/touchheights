<?php

$servername = "127.0.0.1";
$user = "apriakoz_apricopt";
$pass = "hackerx143@";
$db = "apriakoz_touch_heights";


$conn = new mysqli($servername, $user , $pass , $db);

if(!$conn) {
    die("connection failed");
}
