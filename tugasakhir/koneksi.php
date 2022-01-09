<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'mynotescode';

try {
    $pdo = new PDO('mysql:host=' . $host . ';dbname=' . $database, $username, $password);
} catch (PDOException $e) {
    die($e->getMessage());
}
