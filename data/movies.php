<?php 

require_once __DIR__ . "/../models/Genre.php";
require_once __DIR__ . "/../models/Movie.php";

$movies = [
  new Movie(
    "Star Wars", 
    1977, 
    "https://www.focusjunior.it/content/uploads/site_stored/imgs/0003/016/star-wars-nuova-speranza-1280x720.jpeg", 
    [
      new Genre(""),
      new Genre(1347),
      new Genre("Sci-fi"),
      new Genre("Adventure"),
    ], 
    "George Lucas"
  ),

  new Movie(
    "Ritorno al Futuro",
    1985,
    "https://upload.wikimedia.org/wikipedia/it/2/2d/Marty_e_DocEmmet.png",
    [
      new Genre("Sci-fi"),
      new Genre("Romance"),
    ], 
    "Robert Zemeckis"
  ),
  new Movie(
    "Star Wars", 
    1977, 
    "https://www.focusjunior.it/content/uploads/site_stored/imgs/0003/016/star-wars-nuova-speranza-1280x720.jpeg", 
    [
      new Genre("Sci-fi"),
      new Genre("Adventure"),
    ], 
    "George Lucas"
  ),

  new Movie(
    "Ritorno al Futuro",
    1985,
    "https://upload.wikimedia.org/wikipedia/it/2/2d/Marty_e_DocEmmet.png",
    [
      new Genre("Sci-fi"),
      new Genre("Romance"),
    ], 
    "Robert Zemeckis"
  ),
  new Movie(
    "Star Wars", 
    1977, 
    "https://www.focusjunior.it/content/uploads/site_stored/imgs/0003/016/star-wars-nuova-speranza-1280x720.jpeg", 
    [
      new Genre("Sci-fi"),
      new Genre("Adventure"),
    ], 
    "George Lucas"
  ),

  new Movie(
    "Ritorno al Futuro",
    1985,
    "https://upload.wikimedia.org/wikipedia/it/2/2d/Marty_e_DocEmmet.png",
    [
      new Genre("Sci-fi"),
      new Genre("Romance"),
    ], 
    "Robert Zemeckis"
  ),
];