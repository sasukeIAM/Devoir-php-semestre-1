<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire Adresse Client</title>
    <style>
        body {
    font-family: 'Arial', sans-serif;
    margin: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: burlywood;
}

h2 {
    color: #333;
    margin-bottom: 10px; /* Ajoutez une marge en bas pour séparer le titre du tableau */
}

form {
    width: 400px;
    margin: 20px 0;
}

fieldset {
    border: 1px solid #ddd;
    padding: 10px;
    margin-bottom: 20px;
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

table {
    width: 60%;
    margin: 0 auto; /* Centre le tableau horizontalement sans marge en haut et en bas */
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 10px;
    text-align: left;
}

th {
    background-color: #4CAF50;
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
        $currentExercise = 12;

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
    <h1>EXERCICE 12</h1>
    <h2>Adresse client</h2>

    <form action="traitement.php" method="post">
        <fieldset>
            <legend>Informations client</legend>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required><br>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required><br>

            <label for="adresse">Adresse :</label>
            <input type="text" id="adresse" name="adresse" required><br>

            <label for="ville">Ville :</label>
            <input type="text" id="ville" name="ville" required><br>

            <label for="code_postal">Code postal :</label>
            <input type="text" id="code_postal" name="code_postal" ><br>
        </fieldset>

        <input type="submit" value="Envoyer">
    </form>

</body>
</html>
