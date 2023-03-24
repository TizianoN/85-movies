<div class="card h-100">
  <img src="<?= $movie->poster ?>" class="card-img-top" alt="<?= $movie->title ?>" height="200">

  <div class="card-body">
    <h2 class="card-title"><?= $movie->title ?></h2>
    <h5 class="card-title"><?= $movie->director ?></h5>
    <p class="card-text">
    <ul>
      <?php foreach($movie->genres as $genre) : ?>
      <li><?= $genre->name ?></li>
      <?php endforeach; ?>
    </ul>
    </p>
  </div>
</div>