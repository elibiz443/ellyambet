<?php
  if ($_SERVER['SERVER_NAME'] == 'localhost') {
    define('ROOT_URL', 'http://localhost/ellyambet');

    $host = 'localhost';
    $dbname = 'ellyambet_db';
    $username = 'root';
    $password = '';

    define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'] . '/ellyambet');
  } else {
    define('ROOT_URL', 'https://ellyambet.com');

    $host = 'localhost';
    $dbname = 'ellyamb1_maindb';
    $username = 'ellyamb1_maindb';
    $password = 'ZQJQm7TvuGAnVP8gtpWV';

    define('ROOT_PATH', dirname(__FILE__));
  }

  try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    die("Could not connect to the database $dbname: " . $e->getMessage());
  }
?>