<?php

  // validating empty feilds
  $required_feilds =[
      'first_name',
      'last_name',
      'address_1',
      'city',
      'province',
      'country',
      'postal_code',
      'email',
      'country_code',
      'area_code',
      'phone_number'
  ];

  foreach ($required_feilds as $feild){
      if(empty($_POST[$feild])){
        echo "<br>The {$feild} cannot be empty";
        exit;
      }
  }

  if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
      echo"<br>The email isn't in a valid format. Please correct it.</br>";
      exit;
  }
  // validation is ok

  // sanitization
  foreach($required_feilds as $feild){
      $_POST[$feild] = filter_var($_POST[$feild], FILTER_SANITIZE_STRING);
  }
  $_POST['email'] = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

  // echo $_POST['first_name'];
  // sanitization is meh

  // Normalization
  foreach ($required_feilds as $feild){
      if($feild === "email") continue;

      $_POST[$feild] = strtolower($_POST[$feild]);
      $_POST[$feild] = ucwords($_POST[$feild]);
  }

  var_dump($_POST);
  
  // Connect and insert into our DB
  include('_connect.php');
  $conn = connect();

  $sql = "INSERT INTO contacts (
      first_name,
      last_name,
      address_1,
      address_2,
      city,
      province,
      country,
      postal_code,
      email,
      country_code,
      area_code,
      phone_number
  ) VALUES (
      :first_name,
      :last_name,
      :address_1,
      :address_2,
      :city,
      :province,
      :country,
      :postal_code,
      :email,
      :country_code,
      :area_code,
      :phone_number
  )";

  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':first_name', $_POST['first_name'], PDO::PARAM_STR);
    $stmt->bindParam(':last_name', $_POST['last_name'], PDO::PARAM_STR);
    $stmt->bindParam(':address_1', $_POST['address_1'], PDO::PARAM_STR);
    $stmt->bindParam(':address_2', $_POST['address_2'], PDO::PARAM_STR);
    $stmt->bindParam(':city', $_POST['city'], PDO::PARAM_STR);
    $stmt->bindParam(':province', $_POST['province'], PDO::PARAM_STR);
    $stmt->bindParam(':country', $_POST['country'], PDO::PARAM_STR);
    $stmt->bindParam(':postal_code', $_POST['postal_code'], PDO::PARAM_STR);
    $stmt->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
    $stmt->bindParam(':country_code', $_POST['country_code'], PDO::PARAM_STR);
    $stmt->bindParam(':area_code', $_POST['area_code'], PDO::PARAM_STR);
    $stmt->bindParam(':phone_number', $_POST['phone_number'], PDO::PARAM_STR);

    $stmt->execute();

    if ($stmt->errorCode() !== "00000") {
        echo "There was an issue inserting the row.";
        var_dump($stmt->errorInfo());
    } else {
        echo "The row was inserted successfully";
    }