<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de Voyelles et Consonnes</title>
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
        $currentExercise = 10;

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

    <h1>EXERCICE 10</h1>
    <h2>Compter les voyelles et les consonnes</h2>
    <form method="POST">
        <label for="chaine">Entrez une chaîne de caractères :</label><br>
        <input type="text" name="chaine" id="chaine" required>
        <br><br>
        <button type="submit">Analyser</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $chaine = $_POST['chaine'];
        $voyelles = 0;
        $consonnes = 0;

        // Définir les voyelles
        $listeVoyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];

        // Parcourir chaque caractère
        for ($i = 0; $i < strlen($chaine); $i++) {
            $char = $chaine[$i];
            if (ctype_alpha($char)) { // Vérifie si c'est une lettre
                if (in_array($char, $listeVoyelles)) {
                    $voyelles++;
                } else {
                    $consonnes++;
                }
            }
        }

        echo "<h3>Résultats :</h3>";
        echo "Chaîne analysée : \"$chaine\"<br>";
        echo "Nombre de voyelles : $voyelles<br>";
        echo "Nombre de consonnes : $consonnes<br>";
    }
    ?>
</body>
</html>
