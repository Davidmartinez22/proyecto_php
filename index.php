<?php

//Definir la URL de la api correctamente
const API_URL = "https://whenisthenextmcufilm.com/api";
$result = file_get_contents(API_URL); // Realiza una solicitud GET a la API
$data = json_decode($result, true); //Decodifica la respuesta JSON en un array

var_dump($data);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <div class="container movie-container">
       <img src="<?=$data["poster_url"] ?>" alt="<?= $data["title"] ?>" class="movie-image">
       <h2 class="mt-4"><?=$data["title"] ?> se estrena en <?= $data["days_until"] ?> dias</h2>
       <p class="fs-5">Fecha de estreno: <strong><?= $data["release_date"] ?></strong></p>
       <p class="fs-6 text-secondary">La siguiente pelicula es: <strong><?= $data["following_production"]["title"] ?></strong></p>
      </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>