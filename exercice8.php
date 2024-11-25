<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul Statistiques</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: burlywood;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        body{
            text-align: center;
            background-color: brown;
        }

        form {
            background-color: #fff;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 10px;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        p {
            margin-top: 20px;
            font-weight: bold;
            color: white;
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

        
        h2{
            color: white;
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
        $currentExercise = 8;

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

    <h1>EXERCICE 8</h1>
    <h2>Calculer la moyenne, le maximum et le minimum</h2>
    <form method="POST">
        <label for="nombres">Entrez des nombres séparés par des virgules :</label><br>
        <input type="text" name="nombres" id="nombres" required>
        <br><br>
        <button type="submit">Calculer</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombres = $_POST['nombres'];

        // Conversion de la chaîne en tableau d'entiers
        $tableau = array_map('intval', explode(',', $nombres));

        if (count($tableau) > 0) {
            // Calcul des statistiques
            $somme = array_sum($tableau);
            $moyenne = $somme / count($tableau);
            $maximum = max($tableau);
            $minimum = min($tableau);

            echo "<h3>Résultats :</h3>";
            echo "Nombres : " . implode(", ", $tableau) . "<br>";
            echo "Moyenne : " . number_format($moyenne, 2) . "<br>";
            echo "Maximum : $maximum<br>";
            echo "Minimum : $minimum<br>";
        } else {
            echo "<p style='color:red;'>Veuillez entrer au moins un nombre valide.</p>";
        }
    }
    ?>
</body>
</html>
