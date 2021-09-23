<?php

$ser = 'localhost';
$db = 'school_management_system';
$usr = 'root';
$pwd = '';
$conn = mysqli_connect($ser, $usr, $pwd, $db);
if (!$conn) {
    die('connection failed');
}
