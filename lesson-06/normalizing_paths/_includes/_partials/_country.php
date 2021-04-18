<div class="country">
  <h3>
    <?= $row["name"] ?? null ?>
  </h3>
  <hr>
  <p>
    <?= $row["description"] ?? null ?>
  </p>
  <small><?= $row["population"] ?? null ?></small>
</div>