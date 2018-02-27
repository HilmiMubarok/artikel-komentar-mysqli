<?php


$host = "localhost";
$user = "root";
$pass = "";
$db   = "artikel_komen";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
	echo "Koneksi Gagal";
}

include 'fungsi_artikel.php';
include 'fungsi_komentar.php';