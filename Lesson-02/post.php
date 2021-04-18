<!-- This is an HTML comment -->
<!--
  PHP has a few built-in associative arrays
  you should be aware of. These include (and are
  not limited to) $_GET, $_POST, $_REQUEST, $_COOKIE,
  and $_SESSION. Some of these (like the ones above) are
  empty and allow for you to store data in them. Some contain
  crucial information, like $_SERVER, that can be used to
  help ascertain where you are, as well as information
  about your application.

  $_POST allows you to retrieve body parameters (defined
  in a request body string) and their values. Request body strings are
  passed generally from forms, but can be sent using other means like
  CuRL or through an endpoint tester like PostMan or HoppscotchIO.
-->
<!-- Step 1: Create a PHP block -->
<?php
  // Step 3: Dump the contents of the associative array, $_POST
  var_dump($_POST);
  var_dump($_SERVER);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <!-- Step 2: Create a form and send the form back to itself -->
  <form method="post" action="<?= $_SERVER["PHP_SELF"]">
    <div>
      <label for="name">Name:</label>
      <input type="text" name="name">
    </div>
    <div>
      <label for="age">Age:</label>
      <input type="number" name="age">
    </div>
    <div>
      <label for="married">Married:</label>
      <input type="radio" name="married" value="true">
      yes
      <input type="radio" name="married" value="false">
      no
    </div>
    <button type="submit">Submit</button>
  </form>
</body>
</html>