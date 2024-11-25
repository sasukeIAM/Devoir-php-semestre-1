<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul d'un cercle</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: brown;
            margin-top: 20;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
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

        a:hover {
            background-color: white; /* Changement de couleur de fond au survol */
            color:black;
        }
        h2{
            color: white;
        }
    </style>
</head>
<body>
<a href="index.PHP">HOME</a> 
<br>
<?php
        // Exercice actuel
        $currentExercise = 5;

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

    <h1>EXERCICE 5</h1>
    <h2>Cet exercice calcule le diamètre, le périmètre et la surface d'un cercle.</h2>
<?php
// Fonction pour calculer le diamètre d'un cercle
function calculerDiametre($rayon) {
    return 2 * $rayon;
}

// Fonction pour calculer le périmètre d'un cercle
function calculerPerimetre($rayon) {
    return 2 * M_PI * $rayon;
}

// Fonction pour calculer la surface d'un cercle
function calculerSurface($rayon) {
    return M_PI * pow($rayon, 2);
}

// Vérification si le rayon est soumis via le formulaire
if (isset($_POST['submit'])) {
    $rayon = isset($_POST['rayon']) ? (float)$_POST['rayon'] : 0;

    // Vérification si le rayon est un nombre positif
    if ($rayon > 0) {
        $diametre = calculerDiametre(rayon: $rayon);
        $perimetre = calculerPerimetre(rayon: $rayon);
        $surface = calculerSurface(rayon: $rayon);

        echo "<p>Rayon saisi : $rayon</p>";
        echo "<p>Diamètre : $diametre</p>";
        echo "<p>Périmètre : $perimetre</p>";
        echo "<p>Surface : $surface</p>";
    } else {
        echo "<p>Veuillez saisir un rayon positif.</p>";
    }
}
?>

<form method="post" action="" style="max-width: 400px;">
    <label for="rayon">Rayon du cercle :</label>
    <input type="text" name="rayon" id="rayon" required>

    <input type="submit" name="submit" value="Calculer">
</form>

</body>
</html>
