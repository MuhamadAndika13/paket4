<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "kasir";

$koneksi = new mysqli ($server, $user, $pass, $database);

if (!$koneksi) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
} 
// else {
//     die("<script>alert('Berhasil Login.')</script>");
// }

?>