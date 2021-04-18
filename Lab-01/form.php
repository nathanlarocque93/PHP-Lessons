<!-- posting table information on page -->
<?php
  // database connection for lesson_03
  $mysqli = mysqli_connect("localhost", "root", null, "lesson_03");

  var_dump($_POST);

?>

<!DOCTYPE html>
  <head>
    <title>The Form</title>
  </head>

  <body>
    <!-- Step 1: Set the action and method attributes so the form data will be sent to the insert.php page -->
    <form action="./insert.php" method="post">
      <div>
        <label>Product Name:</label><br>
        <!-- Step 2: Set the name attribute using the naming convention we discussed today -->
        <input name="name">
      </div>

      <div>
        <label>Product Price:</label><br>
        <!-- Step 3: Set the name attribute using the naming convention we discussed today -->
        <input type="num" name="price">
      </div>
      
      <button type="submit">Submit</button>
    </form>
  </body>
</html>