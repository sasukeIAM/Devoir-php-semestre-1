<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
         body {
            text-align: center;
            font-family: Arial, sans-serif;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: blueviolet;
            padding-top: 3%;
        }

        .container {
            text-align: center;
        }

        button {
            cursor: pointer;
            padding: 5px 10px;
        }
        h2{
            color: yellow;
        }
        .pour{
            color: red;
        }
        p{
            font-size: 30px;
            
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
    </style>
    <title>Exercice 3</title>
</head>
<body>
<a href="index.php">HOME</a>
    <br>
    <?php
        // Exercice actuel
        $currentExercise = 3;

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

    <?php
        $targetNumber = 152;

        // Boucle while
        $attemptsWhile = 0;
        $randomNumberWhile = 0;
        while ($randomNumberWhile != $targetNumber) {
            $randomNumberWhile = rand(100, 999);
            $attemptsWhile++;
        }

        // Boucle for
        $attemptsFor = 0;
        for ($randomNumberFor = 0; $randomNumberFor != $targetNumber; $randomNumberFor = rand(100, 999)) {
            $attemptsFor++;
        }

        echo "<h1>Exercice 3</h1>";
        echo "<h1>Trouver le nombre choisi avec while et for</h1>";
        echo "<p>Le nombre Initial est : $targetNumber</p>";
        echo "<h2>Nombre de coups avec la boucle while : $attemptsWhile</h2>";
        echo "<h2 class='pour'>Nombre de coups avec la boucle for : $attemptsFor</h2>";
        echo "<p>Merci d'actualiser la page pour revoir le nombre de coups réalisés par chaque boucle</p>";
        ?>
    </div>
</body>
</html>
