<!-- This is an HTML comment -->
<!--
  First let's start with the hard rule that
  ALL ARRAYS IN PHP ARE ASSOCIATIVE ARRAYS.
  This implies that the key for the array does
  not have to be a number. In fact, it can be
  anything you want it to be, providing it's
  a number or a string.
-->
<!-- Step 1: Create a PHP block -->


  /**
   * THE CHALLENGE
   * I need to store student information for multiple
   * students using only array structures.
   * (Seems oddly specific...)
   */
  // Attempt 1: Using standard arrays with auto-generated numerical keys:
  

  /**
   * In the above example we would need to use loops
   * to build the data into some kind of table, BUT
   * there are some potential issues:
   * 1) Order is super important! If the data ever happens
   *    to wind up in the wrong order, the output will be very
   *    confusing
   * 2) Quantity is also super important. These arrays can only
   *    ever contain 3 items. If they ever contain more than
   *    3 items, the application will likely break when we attempt
   *    to iterate over the contents. Not good... THERE HAS TO BE
   *    A BETTER WAY!!!
   */

  // Attempt 2: Using associative arrays with pre-defined string keys:
  

  /**
   * Associative arrays to the rescue! Because our
   * keys are labels, we can EXPLICITLY access the
   * values. This is a much better approach as then
   * order and quantity become irrelevant!
   */

  // Accessing Gagandeep's DOB:
  

  /**
   * Understanding associative arrays in PHP is
   * imperative to understanding PHP. SQL queries
   * in PHP can return data as an associative array.
   * Functions can receive associative arrays as
   * arguments. Associative arrays are used to build
   * self-describing data which than can be converted
   * into XML and JSON quite simply.
   * 
   * It is important to remember the rule that ALL
   * arrays in PHP are associative. This also means that
   * all array functions that are available for standard
   * arrays can be used on associative arrays. In fact,
   * we should stop calling them standard arrays. We should
   * instead call them "implicitly keyed arrays". That would
   * make associative arrays "explicitly keyed arrays".
   */

