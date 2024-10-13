<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Prakweb_2024_C_223040011";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>