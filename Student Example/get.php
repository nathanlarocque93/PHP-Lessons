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

  $_GET allows you to retrieve query parameters (defined
  in a query string) and their values. Query strings are
  denoted by the question mark operator:
  
  example.com?key1=value1

  You can add extra values by using the ampersand & operator:
  example.com?key1=value1&key2=value2

  If you look at the $_GET value you will see the following structure:
  $_GET = [
    'key1' => 'value1',
    'key2' => 'value2'
  ];
-->
<!-- Step 1: Create a PHP block -->

  // Step 3: Dump the contents of the associative array, $_GET
  


<!--
  PHP and HTML can exist in the same file
  providing the file extension ends in PHP.
  This ensures the PHP is parsed and output
  is converted into HTML.
-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>$_GET Example</title>
</head>
<body>
  <!--
    Below is known as a relative path. The "./" says "start in the directory this file is in".
    Step 2: Add a query string onto the path
  -->
  <a href="./get.php">click me</a>
</body>
</html>