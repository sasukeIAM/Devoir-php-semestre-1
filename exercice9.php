<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXO 17</title>
    <style>
     body{
         background-color: brown;
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
            margin-left: 45%;
        }

        a:hover {
            background-color: white; /* Changement de couleur de fond au survol */
            color:black;
        }
        h2{
            color: white;
            font-size: 20px;
        }
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
<a href="index.PHP">HOME</a>
<br>
<?php
        // Exercice actuel
        $currentExercise = 9;

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
<h1>EXERCICE 9</h1>
<h2> Cette fonction prend un tableau multidimensionnel en paramètre et génère un tableau XHTML dont Les clés du<br> premier niveau du tableau sont utilisées comme titres de colonnes. </h2>
<?php
function afficherTableauMultidimensionnel($tableau) {
    echo '<style>
            table {
                border-collapse: collapse;
                width: 100%;
                margin-bottom: 20px;
            }
            th, td {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }
            th {
                background-color: white;
            }
          </style>';

    echo '<table>';
    
     // En-tête du tableau avec les clés des premiers éléments du tableau multidimensionnel
    echo '<tr>';
    foreach (array_keys(reset($tableau)) as $titre) {
        echo '<th>' . htmlspecialchars($titre) . '</th>';
    }
    echo '</tr>';
    
    // Corps du tableau avec les données
    foreach ($tableau as $ligne) {
        echo '<tr>';
        foreach ($ligne as $valeur) {
            echo '<td>' . htmlspecialchars($valeur) . '</td>';
        }
        echo '</tr>';
    }
    
    echo '</table>';
}

// Exemple d'utilisation avec un tableau multidimensionnel
$donnees = [ 
    ['Prenom' => 'SOUKEYE','Nom' => 'THIAM' ,'Age' => 19, 'Ville' => 'DAKAR'],
    ['Prenomm' => 'FATOU','Nom' => 'DIOP', 'Age' => 26, 'Ville' => 'GUEDIAWAYE'],
    ['Prenom' => 'OMAR', 'NOM' => 'NDIAYE', 'Age' =>22, 'Ville' => 'PIKINE']
];
   


// Appel de la fonction avec le tableau multidimensionnel
afficherTableauMultidimensionnel($donnees);
?>
  
</body>
</html>
