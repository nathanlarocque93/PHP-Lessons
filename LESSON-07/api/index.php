<?php
  
  /*
    Step 1:
    A simple function to respond with the correct headers
    and status code. Will convert the response into JSON.
  */
  function response ($code, $message) {
    http_response_code($code);
    header("Content-Type: application/json");
    echo json_encode($message);
  }

  /*
    The connect function will be availabe to any of our
    subsequent included files. This means that to interact
    with our connection, we simply call "dbo()" anywhere.
  */
  require_once("connect.php");

  /*
    Step 2: A ReSTful API requires us to be able to understand the
    request path provided, as it will determine the key parts
    needed to build the proper response.
  */
  // var_dump(dirname($_SERVER['PHP_SELF']), $_SERVER['REQUEST_URI']);
  $resolved_path = str_replace(dirname($_SERVER['PHP_SELF']), '', $_SERVER['REQUEST_URI']);

  /*
    Step 3: The "parts" are the various pieces of our requested path,
    sorted by concern.
  */
  $parts = explode("/", $resolved_path);
  $root = $parts[0];
  $resource = $parts[1];
  $action = $parts[2];
  $params = isset($parts[3]) ? array_slice($parts, 3, count($parts)) : [];

  /*
    Step 4: This is the HTTP method used to make the request
  */
  $request_method = $_SERVER['REQUEST_METHOD'];

  /*
    Step 5: The logic below first attempts to see if a resource
    has been defined (ie: "contacts").
  */
  if ($resource) {
    require_once("{$resource}/controller.php");

    switch ($action) {
      case "show":
      case "search":
        if ($request_method !== "GET") {
          return response(404, ["statusMessage" => "Not Found"]);
        }
        break;
      case "create":
      case "update":
      case "delete":
        if ($request_method !== "POST") {
          return response(404, ["statusMessage" => "Not Found"]);
        }
        break;
      default:
        if ($request_method !== "GET") {
          return response(404, ["statusMessage" => "Not Found"]);
        }

        $action = "index";
        break;
    }

    return call_user_func_array($action, $params);
  }