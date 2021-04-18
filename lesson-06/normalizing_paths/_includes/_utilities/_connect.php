<?php
  try {
    $dbh = new PDO("mysql:host=localhost;dbname=comp-1006-lesson-06", "root", "");
  } catch (PDOException $e) {
    echo "<br>ERROR: {$e->getMessage()}<br>";
    die();
  }