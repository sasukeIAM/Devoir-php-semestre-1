<!DOCTYPE html>
<html lang="en">
<hea>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence Immobilière</title>
    <style>
 main {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 80vh;
}

.form-container {
    display: flex;
    margin-top: 20;
    gap: 150px;
}
h2{
            background-color: red;
            
            padding: 10px 20px;
            border: none;
            width: 25%;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 15px;
            margin: 2px;
            border-radius: 10px;
    }

.btn {
    padding: 10px 20px;
    font-size: 18px;
    color: white;
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    
}

.btn:hover {
    background-color: #0056b3;
}
body{
    margin: 40px;
    text-align: center;
    background-image: url('villa.jpg'); /* Ajoutez le chemin vers votre image GIF ici */
    background-size: cover; /* Ajuste la taille de l'image pour couvrir l'ensemble du corps */ 
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
            margin-bottom: 20px; /* Ajout de marge sous le lien HOME */
        }

        a:hover {
            background-color: white; /* Changement de couleur de fond au survol */
            color:black;
        }
        h2{
            color: white;
            font-size: 20px;
        }
        .h2{
            background-color: mediumblue;
            text-align: center;
        }
    

    </style>
</head>
<body>
<a href="index.PHP">HOME</a>
    <br>
    <?php
        // Exercice actuel
        $currentExercise = 15;

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
    <br>
<h2 class="h2">BIENVENUE SUR NOTRE SITE D'AGENCE IMMOBILIER</h2>
<br>
<h2>Choisissez une option :</h2>
    <main>
        <form action="redirect.php" method="post" class="form-container">
            <button type="submit" name="action" value="vendre" class="btn">Vendre</button>
            <button type="submit" name="action" value="acheter" class="btn">Acheter</button>
            <button type="submit" name="action" value="louer" class="btn">Louer</button>
        </form>
    </main>
</body>
</html>
