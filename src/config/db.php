<?php
// $conn = new mysqli("db", "root", "root", "club_db");
$conn = new mysqli("mysql.railway.internal", "root", "root", "club_db",3306);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>