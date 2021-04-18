<?php

  $conn = mysqli_connect("localhost", "root", null, "comp_1006_lesson_03");

  $sql = "DELETE FROM countries
  WHERE id = {$_GET['id']}";
  $result = mysqli_query($conn, $sql);

  session_start();
  if ($result) {
    $_SESSION["message"] = "The country was deleted successfully.";
  } else {
    $_SESSION["message"] =  "There was an error updating the record: " . mysqli_error($conn);
  }

  header("Location: notification.php");
  exit();

?>
