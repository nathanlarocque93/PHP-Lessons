<?php
  require_once('./_config.php');
  include_once('_partials/_header.php');
  $sql = "SELECT * FROM countries ORDER BY RAND() LIMIT 1";
  $row = $dbh->query($sql)->fetch();
?>
<!-- Our content is going here -->
<header class="main-heading">
  <h1>
    Featured Country - <?= $row['name'] ?? null ?>
  </h1>
</header>
<?php include_once('_partials/_footer.php'); ?>