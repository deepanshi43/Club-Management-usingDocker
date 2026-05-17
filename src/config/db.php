<?php
// $conn = new mysqli("db", "root", "root", "club_db");
$conn = new mysqli("mysql://root:ExgwGvYGVTFirgppBvKOEffrLwtiPbnq@autorack.proxy.rlwy.net:31674/railway", "root", "ExgwGvYGVTFirgppBvKOEffrLwtiPbnq", "railway",3306);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>