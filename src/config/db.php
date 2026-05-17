<?php
// $conn = new mysqli("db", "root", "root", "club_db");
$conn = new mysqli("autorack.proxy.rlwy.net", "root", "ExgwGvYGVTFirgppBvKOEffrLwtiPbnq", "railway",31674);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>