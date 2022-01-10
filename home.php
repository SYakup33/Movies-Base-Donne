<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
<?php

//PDO : Initialiser la connection
$pdo = new PDO('sqlite:movies.db');

//Créer notre requête SQL
$requete = $pdo->query("SELECT * FROM Film");

//Execution
$resultat = $requete->fetchAll(PDO::FETCH_DEFAULT);
?>
<h1>Les Films</h1>
<h2>Film 1</h2>
<?php
//affichage
foreach ($resultat as $test){
    // print_r($test);
    ?>
    
    <p>
        
        <?php 
            echo $test['Titre']."&nbsp &nbsp &nbsp";
            echo $test['Auteur'] ."&nbsp &nbsp &nbsp";
            echo $test['Durée (min)']."&nbsp &nbsp &nbsp";
            echo $test['Genre'] ."&nbsp &nbsp &nbsp";
            echo $test['Acteur']."&nbsp &nbsp &nbsp";
            echo $test['Année de sortie'] ."&nbsp &nbsp &nbsp";
            echo $test['Senario'] ."&nbsp &nbsp &nbsp";
            echo $test['Budget ($)'] ."&nbsp &nbsp &nbsp";
            echo $test['Pays de production'] ."&nbsp &nbsp &nbsp";
            echo $test['Société de Production'] ."&nbsp &nbsp &nbsp";
            echo $test['Note'] ."&nbsp &nbsp &nbsp";
        ?>
    </p>

<?php
}
 // print_r($resultat);
// //var_dump($resultat['Film']); 
?>
</body>
</html>
