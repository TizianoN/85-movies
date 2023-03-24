<?php

require_once __DIR__ . "/data/movies.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include __DIR__ . "/template/head.php"; ?>

  <title>Movies - List</title>
</head>

<body>

  <?php include __DIR__ . "/template/navbar.php"; ?>

  <div class="container p-3">

    <h1 class="my-3">Movies</h1>

    <div class="row row-cols-3 g-3">
      <?php foreach($movies as $movie) : ?>
      <div class="col">
        <?php include __DIR__ . "/template/film_card.php"; ?>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</body>

</html>