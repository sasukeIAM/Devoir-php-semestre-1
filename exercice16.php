<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
            font-family: Arial, sans-serif;
            margin: 40px;
            text-align: center;
            background-color: burlywood;
        }
        h2{
            color: white;
        }
        p{
            font-size: 25px;
        }
        a {
            background-color: black;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            width: 10%;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 2px;
            transition-duration: 0.4s;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 20px; /* Ajout de marge sous le lien HOME */
            
        }
        table{
            text-align: center;
        }
        

        a:hover {
            background-color: white; /* Changement de couleur de fond au survol */
            color:black;
        }
</style>
</head>
<body>
<a href="index.PHP">HOME</a>
    <br>
    <?php
        // Exercice actuel
        $currentExercise = 16;

        // Bouton précédent
        $previousExercise = $currentExercise - 1;
        if ($previousExercise > 0) {
            echo "<a href=\"exercice{$previousExercise}.php\">Précédent</a>";
        } else {
            echo "<span class='debut'>Premiere page</span>";
        }

        // Bouton suivant
        $nextExercise = $currentExercise + 1;
        if (file_exists(filename: "exercice{$nextExercise}.php")) {
            echo "<a href=\"exercice{$nextExercise}.php\">Suivant</a>";
        } else {
            echo "<span>Fin</span>";
        } ?>

<h1>EXERCICE 16</h1>
<?php
function transformerTableauEnMajuscule(&$tableau) {
    foreach ($tableau as &$chaine) {
        $chaine = ucfirst(strtolower($chaine)); // Transforme la chaîne : première lettre en majuscule, reste en minuscule
    }
}

// Exemple d'utilisation
$tableau = ["hello", "WoRLD", "PhP", "eXamPle"];
echo "Avant transformation : <br>";
print_r($tableau ); 
echo"<table border='1' cellpaddind='20'>
        <tr>
            <td>hello</td>
            <td>WoRLD</td>
            <td>PhP</td>
            <td>eXamPLE</td>
        </tr>
        </table>";



// Appel de la fonction
transformerTableauEnMajuscule($tableau);

echo " Après transformation : <br>";
print_r($tableau);
?>

</body>
</html>
<?php

