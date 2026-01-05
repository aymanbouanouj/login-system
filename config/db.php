<?php
$conn = new mysqli("localhost", "root", "", "login_system");

if ($conn->connect_error) {
    die("Database connection failed");
}

session_start();
?>
