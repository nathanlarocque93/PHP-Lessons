<?php

  // In the string provided below, write your SQL insert statement to create a new product
  $sql = "INSERT INTO products (
    name,
    price
  ) VALUES (
    '{$_POST['name']}',
    {$_POST['price']}
  )";

  // Replace the value "null" with a MySQLi connection to your database (make sure you've run the SQL file in Workbench before testing!)
  $conn = mysqli_connect("localhost", "root", null, "comp_1006_lesson_03");

  // Execute the SQL statement ($sql) using the MySQLi query function (replace the null value)
  $res = mysqli_query($conn, $sql);

  // Regardless of the outcome we'll store the message in a session variable and redirect
  session_start();
  
  if ($res) {
    $_SESSION["notification"]["success"] = "The new product was created successfully.";
  } else {
    $_SESSION["notification"]["error"] = "There was an error creating the new product: " . mysqli_error($conn);
  }
  
  header("Location: notification.php");
  exit();

?>