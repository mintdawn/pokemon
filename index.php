<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- stylesheets -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Pokemon Project</title>
  </head>
  <body>
      <?php include 'header.html' ?>
      <?php include 'navbar.html' ?>
      <div class="container-fluid justify-content-between text-center p-4">
        <div class="card-columns" id="main">
          <?php
          $json = file_get_contents("pokemon.json");
          $result = json_decode($json);
          foreach ($result as $pokemon => $value) {
            echo '<div class="card p-2 rounded">';
            echo '<div class="card-body bg-dark text-light text-left rounded">';
            echo '<h2 class="text-danger">' . $value->name . '</h2>';
            echo '<hr>';
            echo '<strong><p>Type: </strong>';
            $length = count($value->types);
            for ($i=0; $i<$length; $i++) {
              echo $value->types[$i]->name . ' ';
            }
            echo '</p>';
            echo '<strong><p>Base Attack: </strong>' . $value->stats->baseAttack . '</p>';
            echo '<strong><p>Base Defense: </strong>' . $value->stats->baseDefense . '</p>';
            echo '<strong><p>Base Stamina: </strong>' . $value->stats->baseStamina . '</p>';
            echo '<strong>Charged Attacks</strong><ul>';
            $length = count($value->cinematicMoves);
            for ($i=0; $i<$length; $i++) {
              echo '<li>' . $value->cinematicMoves[$i]->name . '</li>';
            }
            echo '</ul>';
            echo '<strong>Fast Attacks</strong><ul>';
            $length = count($value->quickMoves);
            for ($i=0; $i<$length; $i++) {
              echo '<li>' . $value->quickMoves[$i]->name . '</li>';
            }
            echo '</ul>';
            echo '<button type="button" class="btn btn-danger">';
            echo 'Pokedex # <span class="badge badge-light">' . $value->dex . '</span>';
            echo '<span class="sr-only">pokedex number</span>';
            echo '</button>';
            echo '</div>';
            echo '</div>';
          }
           ?>
        </div>
     </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
