<?php require_once('../_config.php') ?>
<?php include_once('_partials/_header.php') ?>
<?php
  // Code for the connection and fetch
  $sql = "SELECT * FROM countries";
  $rows = $dbh->query($sql)->fetchALL();
?>

<header class="main-heading">
  <h1>Countries</h1>
</header>

<div class="countries">
  <?php
    // Code for the loop and include
    foreach($rows as $row){
      include("_partials/_country.php");
    }
  ?>
</div>

<?php include_once('_partials/_footer.php') ?>