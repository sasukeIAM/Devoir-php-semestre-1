<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jours restants jusqu'à la fin de l'année</title>
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
        $currentExercise = 11;

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

    <h1>EXERCICE 11</h1>
    <h2>Calcul des jours restants jusqu'à la fin de l'année</h2>
    <form method="POST">
        <label for="date">Entrez une date (format : AAAA-MM-JJ) :</label><br>
        <input type="date" name="date" id="date" required>
        <br><br>
        <button type="submit">Calculer</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dateSaisie = $_POST['date'];
        
        // Convertir la date saisie en objet DateTime
        $dateUtilisateur = new DateTime($dateSaisie);
        
        // Obtenir la date de fin d'année
        $finAnnee = new DateTime($dateUtilisateur->format("Y") . "-12-31");
        
        // Calculer la différence
        $difference = $dateUtilisateur->diff($finAnnee);
        $joursRestants = $difference->days;

        // Affichage du résultat
        echo "<h3>Résultats :</h3>";
        echo "Date saisie : " . $dateUtilisateur->format("Y-m-d") . "<br>";
        echo "Nombre de jours restants jusqu'à la fin de l'année : $joursRestants<br>";
    }
    ?>
</body>
</html>
