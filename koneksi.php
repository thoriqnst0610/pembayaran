<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "payment_db";

$connect = new mysqli($server, $user, $password, $db);

if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if (function_exists('opcache_invalidate')) {
    opcache_invalidate(__FILE__);
}

if (function_exists('opcache_reset')) {
    if (time() % 10 == 0) {
        opcache_reset();
    }
}

?>