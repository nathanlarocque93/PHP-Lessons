<?php

  // Step 1: Connect to our MySQL server (replace null)
  $conn = mysqli_connect("localhost", "root", null, "comp_1006_lesson_03");

  // Step 2: Query for a single country by its provided ID (HINT: you'll need to use a super global here...)
  $sql = "SELECT * FROM products WHERE id = {$_GET["id"]}";
  $result = mysqli_query($conn, $sql);

  // Step 3: Fetch the row as an associative array using the correct mysqli fetch function
  $row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
  <head>
    <title>The Form</title>
  </head>

  <body>
    <h1>Edit Product</h1>
    <hr>

    <form action="./update.php" method="post">
      <!-- Step 4: Modify the following field so our update script knows what row we want to affect -->
      <input type="hidden" name="id" value="<?= $row["id"] ?>">
      
      <!-- Step 5: Modify the following input fields so they display the current row value for each -->
      <div>
        <label>Product Name:</label><br>
        <input type="text" name="name" value="<?= $row["name"] ?>">
      </div>

      <div>
        <label>Product Price:</label><br>
        <input type="text" name="price" value="<?= $row["price"] ?>">
      </div>
      
      <button type="submit">Submit</button>
    </form>

    <p>
      <a href="index.php">Back to products...</a>
    </p>
  </body>
</html>