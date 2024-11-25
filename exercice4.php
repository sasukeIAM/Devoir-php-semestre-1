<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            height: 100vh;
            margin-top: 5%;
            text-align: center;
            background-color: blueviolet;
        }

      
        label, input {
            margin: 5px;
            padding: 5px;
            border-radius:  10px;
            border-color: none;
            border:0;
        }

        button {
            cursor: pointer;
            padding: 8px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 3px;
        }
        p{
            color: red;
            font-size: 20px;
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


        .p1{
            color: white;
            font-size: 30px;            
        }

        body{
            text-align: center;
            background-color: blueviolet;
        
        }
        .n1,h1{
            color: white;
        }
        
    </style>
    <title>Exercice 4</title>
</head>

<a href="index.PHP">HOME</a>
<br>
<?php
        // Exercice actuel
        $currentExercise = 4;

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

<h1>Exercice 4</h1>
<h1>Calculer le PPCM et le PGCD de deux nombres</h1>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les deux nombres depuis le formulaire
    $nombre1 = intval($_POST['nombre1']);
    $nombre2 = intval($_POST['nombre2']);

    // Fonction pour calculer le PPCM
    function ppcm($a, $b) {
        $produit = $a * $b;
        
        // Calcul du PGCD (pour calculer le PPCM)
        while ($b != 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }
        
        $pgcd = $a;
        return abs(num: $produit / $pgcd); // Calcul du PPCM
    }

    // Calculer le PPCM
    $resultat = ppcm(a: $nombre1, b: $nombre2);

    // Afficher le résultat
    echo "<p class='p1'>Le PPCM de $nombre1 et $nombre2 est : $resultat</p>";
}
?>
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="nombre1" class="n1">Entrez le premier nombre :</label>
            <input type="number" name="nombre1" required>

            <label for="nombre2" class="n1">Entrez le deuxième nombre :</label>
            <input type="number" name="nombre2" required>

            <button type="submit">Calculer le PPCM</button>
        </form>
    </div>
</body>
</html>
