<?php

$server = 'localhost:3307';
$username = 'root';
$password = '';
$database = 'php_login_database';

try {
  $conn = new PDO("mysql:host=$server;dbname=$taskapp;", $user, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>