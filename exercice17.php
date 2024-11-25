<?php
function sinusAngle($angle, $unite = 'radian') {
    // Conversion de l'angle selon l'unité spécifiée
    switch (strtolower($unite)) {
        case 'radian':
            $angleEnRadians = $angle;
            break;
        case 'degre':
            $angleEnRadians = deg2rad($angle);
            break;
        case 'grade':
            $angleEnRadians = ($angle * M_PI) / 200; // Conversion des grades en radians
            break;
        default:
            echo 'Unité non reconnue.';
            return;
    }

    // Calcul du sinus
    $sinus = sin($angleEnRadians);

    // Affichage avec style CSS et animation au survol
    echo '<div class="resultat">';
    echo '<p style="font-weight: bold; color: #007bff;">Résultat du calcul du sinus</p>';
    echo '<p>Angle: ' . $angle . ' ' . $unite . '</p>';
    echo '<p>Sinus: ' . $sinus . '</p>';
    echo '</div>';
}

// Exemples d'utilisation
$angleEnRadians = 1.5;
$angleEnDegres = 90;
$angleEnGrades = 100;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 16</title>
    <style>
        body {
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: burlywood;
            margin: 0;
            padding: 5%;
            color: white;
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

        a:hover {
            background-color: white; /* Changement de couleur de fond au survol */
            color:black;
        }

        h2 {
            margin-bottom: 20px; /* Ajout de marge sous le texte descriptif */
        }

        .resultat {
            display: inline-block; /* Affichage en ligne pour les résultats */
            border: 2px solid #333;
            padding: 10px;
            margin: 0 10px; /* Ajout d'une marge entre les résultats */
            background-color: black;
            transition: border-color 0.3s ease; /* Ajout de l'animation de transition */
        }

        .resultat:hover {
            border-color: red; /* Changement de couleur de la bordure au survol */
        }
        .fin{
            background-color: red;
            color: white;
            padding: 10px 20px;
            border: none;
            width: 12%;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 2px;
            
            border-radius: 10px;
            
            margin-bottom: 20px; /* Ajout de marge sous le lien HOME */
        }
    </style>
</head>
<body>
    <a href="index.PHP">HOME</a>
    <br>
    <?php
        // Exercice actuel
        $currentExercise = 17;

        // Bouton précédent
        $previousExercise = $currentExercise - 1;
        if ($previousExercise > 0) {
            echo "<a href=\"exercice{$previousExercise}.php\">Précédent</a>";
        } else {
            echo "<span>Début</span>";
        }

        // Bouton suivant
        $nextExercise = $currentExercise + 1;
        if (file_exists("exercice{$nextExercise}.php")) {
            echo "<a href=\"exercice{$nextExercise}.php\">Suivant</a>";
        } else {
            echo "<span class='fin'>Fin des exercices</span>";
        } ?>
    <h1>EXERCICE 17</h1>
    <h2>Le programme ci-dessous donne le sinus d'un angle donné en radian, en degré ou en grade.</h2>
    <?php
    // Calcul du sinus en radians (valeur par défaut)
    sinusAngle($angleEnRadians);

    // Calcul du sinus en degrés
    sinusAngle($angleEnDegres, 'degre');

    // Calcul du sinus en grades
    sinusAngle($angleEnGrades, 'grade');
    ?>
</body>
</html>
