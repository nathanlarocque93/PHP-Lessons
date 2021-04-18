<?php

  // Step 1: The index action to retrieve a random chuck quote
  function index () {
    $response = file_get_contents("https://api.chucknorris.io/jokes/random");

    return response(200, json_decode($response));
  }