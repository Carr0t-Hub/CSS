<?php
// Database configuration
$host = "localhost";
$username = "root";
$password = "";
$dbname = "css_db";


try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $mysqli = new PDO("mysql:host=$host;dbname=pds_db", $username, $password);

    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Optional: Set the character set to utf8
    $conn->exec("set names utf8");
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
