<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calcul TVA</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: burlywood;
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
            color: #333;
            margin-bottom: 20px;
        }

        form {
            width: 400px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <a href="index.PHP">HOME</a>
    <br>
        <?php
        // Exercice actuel
        $currentExercise = 14;

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
            echo "<span>Fin</span>";
        } ?>
    <h1>EXERCICE 14</h1>
    <h2>Calcul TVA</h2>

    <form action="CalculTVA.php" method="post">
        <label for="prixHT">Prix HT :</label>
        <input type="text" id="prixHT" name="prixHT" value="<?php echo isset($_POST['prixHT']) ? htmlspecialchars($_POST['prixHT']) : ''; ?>"><br>

        <label for="tauxTVA">Taux de TVA :</label>
        <input type="text" id="tauxTVA" name="tauxTVA" value="<?php echo isset($_POST['tauxTVA']) ? htmlspecialchars($_POST['tauxTVA']) : ''; ?>"><br>

        <input type="submit" value="Calculer">
    </form>
</body>
</html>
