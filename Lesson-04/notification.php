<?php

  session_start();

  if (isset($_SESSION["message"])) {
    echo $_SESSION["message"];
    session_unset();
  }

?>