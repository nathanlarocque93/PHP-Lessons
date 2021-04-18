<!DOCTYPE html>
  <head>
    <title>Includes & Requires</title>
  </head>
  <body>
    <header>
      <h1>Includes & Requires</h1>
    </header>

    <div>
      <header>
        <h2>Include Me a Bunch of Times</h2>
      </header>
      <!-- code here -->
      <?php
        for($i = 0; $i < 5; $i++){
          include('./include_me_alot.php');
        }
      ?>
    </div>

    <hr>

    <div>
      <header>
        <h2>Include Me Only Once</h2>
      </header>
      <!-- code here -->
      <?php
        for($i = 0; $i < 5000; $i++){
          include_once('./include_me_once.php');
        }
      ?>
    </div>

    <hr>

    <div>
      <header>
        <h2>Include Me if I Exist</h2>
      </header>
      <!-- code here -->
      <?php
        include('./i-dont-exist-so-i-will-cause-a-warning.php');
        echo "But the warning won't prevent me from executing.";
      ?>
    </div>

    <hr>

    <div>
      <header>
        <h2>Nested Includes</h2>
      </header>
      <!-- code here -->
      <?php
        include('./_includes/include_within_include.php');
      ?>
    </div>

    <hr>

    <div>
      <header>
        <h2>Require Me a Bunch of Times</h2>
      </header>
      <!-- code here -->
      <?php

      ?>
    </div>

    <hr>

    <div>
      <header>
        <h2>Require Me Only Once</h2>
      </header>
      <!-- code here -->
      <?php

      ?>
    </div>

    <hr>

    <div>
      <header>
        <h2>Require Me if I Exist</h2>
      </header>
      <!-- code here -->
      <?php
        require('./asdf.php');
        echo "This will never execute because file does not exist";
      ?>
    </div>
  </body>
</html>