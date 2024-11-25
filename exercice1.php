<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         body{
            text-align: center;
            background-color: mediumorchid;
        }
        .VAR{
            color: red;
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
        
        .debut{
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
            
            /* border-radius: 10px; */
            
            margin-bottom: 20px; /* Ajout de marge sous le lien HOME */
        }
    </style>
</head>
<body>

<a href="index.php">HOME</a>
    <br>
    <?php
        // Exercice actuel
        $currentExercise = 1;

        // Bouton précédent
        $previousExercise = $currentExercise - 1;
        if ($previousExercise > 1) {
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


    <h2>EXERCICE 1</h2>
<p>Créez un programme qui prend un mot saisi par l'utilisateur et vérifie s'il s'agit d'un 
    palindrome.Affichez le résultat.</p>
        <h1>Veuillez entrer un mot</h1>
        <form method="POST">
            <input type="text" name="mot" required>
            <button type="submit">Vérifier</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $mot = $_POST["mot"];
            $reverseMot = strrev($mot);
            if ($mot === $reverseMot) {
                echo "<p>$mot est un palindrome.</p>";
            } else {
                echo "<p>$mot n'est pas un palindrome.</p>";
            }
        }
        ?>
    
</body>
</html>
