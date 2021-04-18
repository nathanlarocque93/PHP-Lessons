<?php

  $result = mysqli_query($mysqli, "
    SELECT * FROM countries
  ");

  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
  // var_dump($rows);

?>

<table class="table table-striped my-5">
  <thead>
    <tr>
      <td>Name</td>
      <td>Description</td>
      <td>Population</td>
      <td>Actions</td>
    </tr>
  </thead>

  <tbody>
    <?php foreach($rows as $row): ?>
      <tr>
        <td><?= $row["name"] ?></td>
        <td><?= $row["description"] ?></td>
        <td><?= $row["population"] ?></td>
        <td>
          <a href="edit.php?id=<?= $row["id"] ?>">edit</a>
          |
          <a href="delete.php?id=<?= $row["id"] ?>" onClick="return confirm('Are you sure?')">delete</a>
        </td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>