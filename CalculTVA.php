<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat du Calcul TVA</title>
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
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 10px;
            transition-duration: 0.4s;
            border-radius: 10px;
        }

        a:hover {
            background-color: blue; /* Changement de couleur de fond au survol */
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
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input {
            width: calc(100% - 16px);
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[readonly] {
            background-color: #eee;
        }
        @keyframes blink {
      0% { color: red; }
      50% { color: transparent; }
      100% { color: white; }
    }

    .clignotant {
      animation: blink 1s infinite;
    }
    </style>
</head>
<body>
    <a href="index.PHP">HOME</a>
    <h2>Résultat du Calcul TVA</h2>

    <?php
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les valeurs du formulaire
        $prixHT = isset($_POST['prixHT']) ? floatval($_POST['prixHT']) : 0;
        $tauxTVA = isset($_POST['tauxTVA']) ? floatval($_POST['tauxTVA']) : 0;

        // Calculer le montant de la TVA et le prix TTC
        $montantTVA = $prixHT * ($tauxTVA / 100);
        $prixTTC = $prixHT + $montantTVA;
    ?>
    <form>
        <label for="prixHT">Prix HT :</label>
        <input type="text" id="prixHT" name="prixHT" value="<?php echo $prixHT; ?>" readonly>

        <label for="tauxTVA">Taux de TVA :</label>
        <input type="text" id="tauxTVA" name="tauxTVA" value="<?php echo $tauxTVA . '%'; ?>" readonly>

        <label for="montantTVA">Montant TVA :</label>
        <input type="text" id="montantTVA" name="montantTVA" value="<?php echo $montantTVA; ?>" readonly>

        <label for="prixTTC">Prix TTC :</label>
        <input type="text" id="prixTTC" name="prixTTC" value="<?php echo $prixTTC; ?>" readonly>
    </form>
    <?php
    } else {
        // Afficher un message si le formulaire n'a pas été soumis
        echo "<p>Aucune donnée à afficher.</p>";
    }
    ?>
     <p><a href="exercice14.php" class="a2 clignotant">Retour</a></p>
</body>
</html>
