<!-- This is an HTML comment -->
<!--
  Variables are essential to computer programming.
  They help us to reduce redundancy, as well as promote
  scalability, by providing us with a container to
  store a value in.

  Variables in PHP are looser than other languages like Java.
  They permit variables to be any data type without first
  declaring the data type. They can also dynamically change
  type at any point within the application without error.

  !!!IMPORTANT: Just because you CAN change the data type,
  it is bad practice to do so. Take the knowledge you gained
  in your Java/C#/C++ courses and apply it abstractly to PHP.
  Once you declare a varaiable and assign it a data type, don't
  modify the data type later on.
-->
<!-- Step 1: Create a PHP block -->
<?php

  /**
   * Step 2:
   * (in case you have forgotten, this is a multi-line comment)
   * Valid Variables
   * The following variable declarations are valid
   */
  // String:
  $name = "Nathan Larocque";
  $middle_name = 'Patrick';
  $full_name  = $name . " " . $middle_name;
  $full_name = "{$name} {$middle_name}";
  echo $full_name;

  // Symbol name beginning with underscore:
  $_private_name = "Butterscotch Smith";

  // Integer:
  $intsy_bitsy = 10;

  // Decimal:
  $dec_the_halls = 10.5;
  $dec_the_halls = "Falalala";

  // Boolean
  $is_noel_real = false;

  $im_a_num_really = "5";
  echo $im_a_num_really * 5;
  // echo "1 and 5" * 5;
  // echo "1 5" * 5;

   /**
    * Step 3:
    * Invalid Variables
    * The following variable declarations are invalid
    */
  
  // Symbol name cannot have dashes:
  // $not-valid = "No dashes allowed";

  // Symbol name cannot have spaces:
  // $not valid = "No spaces!";
  

  // Symbol name cannot begin with a number
  // $1_not_valid = "Cannat begin with a num";
  

  // Symbol name cannot have non-alphanumeric characters
  // $bob_you_@&#%$ = "Variables cannot contain alphanumeric characters";

?>