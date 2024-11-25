<!DOCTYPE html>
<html>
<head>
    <title>Test de nombre parfait</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        text-align: center;
        background-color: brown;
    }

    h2{
        color: red;
    }
    .oui{
        color: green;
        
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
        $currentExercise = 7;

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

    <h1>EXERCICE 7</h1>
    <h1>Cet exercice trouve si un nombre  est parfait ou non</h1>
    

<form method="post" action="">
    <label for="nombre"> <h3> Entrez un nombre ci-dessous :</h3></label>
    <input type="text" name="nombre" id="nombre">
    <input type="submit" value="Tester le nombre parfait">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer le nombre saisi au clavier
    $nombre = $_POST["nombre"];

    // Vérifier si le nombre est un entier positif
    if (is_numeric($nombre) && $nombre > 0 && is_int($nombre + 0)) {
        // Calculer la somme des diviseurs propres
        $sommeDiviseurs = 0;
        for ($i = 1; $i < $nombre; $i++) {
            if ($nombre % $i == 0) {
                $sommeDiviseurs += $i;
            }
        }

        // Tester si le nombre est parfait
        if ($sommeDiviseurs == $nombre) {
            echo " <h2 class='oui'> $nombre est un nombre parfait.</h2>";
        } else {
            echo " <h2> $nombre n'est pas un nombre parfait.</h2>";
        }
    } else {
        echo " <h2> Veuillez saisir un nombre entier positif. </h2>";
    }
}
?>

</body>
</html>
