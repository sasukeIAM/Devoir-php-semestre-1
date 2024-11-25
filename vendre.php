<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Louer un bien</title>
    <style>
       body {
    font-family: Arial, sans-serif;
    background-color: burlywood;
    margin: 0;
    padding-top: 0;
    text-align: center;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

        
    .container {
            background-color: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin: 0 auto; /* Ajout de cette ligne pour centrer horizontalement */
            margin-top: 3%; /* Pour maintenir l'écart par rapport au haut de la page */
        }

        

        form {
            display: flex;
            flex-direction: column;
        
            
        }

        input, button {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        .image-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: 20px;
        }

        .image {
            width: calc(50% - 10px);
            margin-bottom: 10px;
            border-radius: 4px;
            overflow: hidden;
        }

        .image img {
            width: 100%;
            height: auto;
            border-radius: 4px;
        }


        .a2 {
    display: inline-block;
    margin-top: 15px;
    text-decoration: none;
    color: red;
    border: 4%;
    
}

@keyframes blink {
      0% { color: red; }
      50% { color: transparent; }
      100% { color: red; }
    }

    .clignotant {
      animation: blink 1s infinite;
    }
    h2{
            background-color: blue;
            color: white;
            padding: 10px 20px;
            border: none;
            width: 50%;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 2px;
            border-radius: 10px;
    }
    </style>
</head>
<body>
<p><a href="exercice15.php" class="a2 clignotant">Retour</a></p>
    <div class="container">
        <h2>QUE VENDEZ-VOUS ?</h2>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
            <label for="type">Type du produit :</label>
            <input type="text" name="type" required>

            <label for="nom_bien">Nom du produit :</label>
            <input type="text" name="nom_bien" required>

            <label for="prix">Prix :</label>
            <input type="number" name="prix" required>

            <label for="description">Description :</label>
            <textarea name="description" rows="4" required></textarea>

            <label for="image1">Image 1 :</label>
            <input type="file" name="image1" accept="image/*">

            <label for="image2">Image 2 :</label>
            <input type="file" name="image2" accept="image/*">

            <button type="submit" name="vendre">Publier</button>
        </form>

        <div class="image-container">
            <?php
            // Afficher les images si elles ont été téléchargées
            for ($i = 1; $i <= 2; $i++) {
                $imageName = "image" . $i;
                if (isset($_FILES[$imageName]) && $_FILES[$imageName]['error'] == 0) {
                    $imagePath = $_FILES[$imageName]['tmp_name'];
                    echo '<div class="image"><img src="' . $imagePath . '" alt="Image"></div>';
                }
            }
            ?>
        </div>

        <?php
        // Traitement du formulaire de vente
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["louer"])) {
            // Récupérer les données du formulaire
            $type = $_POST["type"];
            $prix = $_POST["prix"];
            $description = $_POST["description"];

            // Traitement des images
            $imagePaths = [];
            for ($i = 1; $i <= 2; $i++) {
                $imageName = "image" . $i;
                if (isset($_FILES[$imageName]) && $_FILES[$imageName]['error'] == 0) {
                    // Sauvegarder l'image dans le dossier de votre choix
                    $destination = "uploads/" . basename($_FILES[$imageName]['name']);
                    move_uploaded_file($_FILES[$imageName]['tmp_name'], $destination);
                    $imagePaths[] = $destination;
                }
            }

            // Vous pouvez ici traiter les données et les chemins des images
            // Pour l'exemple, affichons simplement les données saisies.
            echo "<h3>Informations du bien à louer :</h3>";
            echo "<p><strong>Type :</strong> $type</p>";
            echo "<p><strong>Prix :</strong> $prix</p>";
            echo "<p><strong>Description :</strong> $description</p>";

            // Afficher les chemins des images
            if (!empty($imagePaths)) {
                echo "<h3>Images téléchargées :</h3>";
                foreach ($imagePaths as $path) {
                    echo '<img src="' . $path . '" alt="Image"><br>';
                }
            }
        }
        ?>
    </div>

</body>
</html>
