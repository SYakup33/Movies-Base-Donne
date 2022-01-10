<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<style>
    .container {
  padding: 2px 16px;
  width:100%;
  height:100%;
  display:flex;
  flex-direction: column;
  justify-content:center;
  align-items:center;

}
.img-container {
    width: 30%;
    height:30%;
}

.card {
  /* Add shadows to create the "card" effect */
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 90%;
  height: auto;
  margin:auto;
  display:flex;
  justify-content:center;
  align-items:center;
}
</style>
<body>
<?php

//PDO : Initialiser la connection
$pdo = new PDO('sqlite:movies.db');

//Créer notre requête SQL
$requete = $pdo->query("SELECT * FROM Film");

//Execution
$resultat = $requete->fetchAll(PDO::FETCH_ASSOC);
?>
<h1>Les Films</h1>

<?php
//affichage
foreach ($resultat as $resultat){
    echo "<div class='card'>";
    echo "  <div class='img-container'>
                <img src='https://m.media-amazon.com/images/I/71dtmwLA3ML._AC_SY606_.jpg' alt='Avatar'>
            </div>
    ";
    echo "<div class='container'>";
        echo "<h4><b>". $resultat['Titre']."</b></h4>";
        echo "<h5>". $resultat['Auteur'] ."</h5>";
        echo "<h5>". $resultat['Durée (min)'] ."</h5>";
        echo "<h5>". $resultat['Genre'] ."</h5>";
        echo "<h5>". $resultat['Acteur'] ."</h5>";
        echo "<h5>". $resultat['Année de sortie'] ."</h5>";
        echo "<h5>". $resultat['Senario'] ."</h5>";
        echo "<h5>". $resultat['Budget ($)'] ."</h5>";
        echo "<h5>". $resultat['Pays de production'] ."</h5>";
        echo "<h5>". $resultat['Société de Production'] ."</h5>";
        echo "<h5>". $resultat['Note'] ."</h5>";
    echo "</div>";
    echo "</div>";
    echo "<hr>";
}
?>
</body>
</html>
