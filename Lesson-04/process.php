<?php

  if (isset($_POST['name'])) {
    $result = mysqli_query($mysqli, "
      INSERT INTO countries (
        name,
        description,
        population
      ) VALUES (
        '{$_POST['name']}',
        '{$_POST['description']}',
        {$_POST['population']}
      )
    ");

    session_start();
    if ($result) {
      $_SESSION["message"] = "The new country was created successfully";
    } else {
      $error = mysqli_error($mysqli);
      $_SESSION["message"] = "There was an error creating the new country: " . $error;
    }

    header("Location: notification.php");
    exit();
  }

?>