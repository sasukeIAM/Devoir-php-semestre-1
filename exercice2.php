<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding-top: 5%;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
            background-color: blueviolet;
        }

       button {
            cursor: pointer;
            padding: 5px 10px;
        }

        p{
            color: black;
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
        h1{
            text-align: center;
        }
        a:hover {
            background-color: white; /* Changement de couleur de fond au survol */
            color:black;
        }
    </style>
</head>
<body>
<a href="index.php">HOME</a>
    <br>
    <?php
        // Exercice actuel
        $currentExercise = 2;

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
<h1>EXERCICE 2</h1>
<p>Rédigez une expression conditionnelle pour tester si un nombre est à la fois un multiple de 3 et de 5.</p>
        <form method="POST">
            <input type="number" name="nombre" required>
            <button type="submit">Tester</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST["nombre"];
            if ($nombre % 3 == 0 && $nombre % 5 == 0) {
                echo "<p>$nombre est un multiple de 3 et de 5.</p>";
            } else {
                echo "<p>$nombre n'est pas un multiple de 3 et de 5.</p>";
            }
        }
        ?>

    
</body>
</html>
