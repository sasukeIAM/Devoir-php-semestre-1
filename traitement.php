<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat du Traitement</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: burlywood;
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
.a1 {
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

        .a1:hover {
            background-color: blue; /* Changement de couleur de fond au survol */
        }
        @keyframes blink {
      0% { color: red; }
      50% { color: transparent; }
      100% { color: white; }
    }

    .clignotant {
      animation: blink 1s infinite;
    }
    .a2 {
    display: inline-block;
    margin-top: 15px;
    text-decoration: none;
    color: red;
    
}
    </style>
</head>
<body>
<a href="index.PHP" class="a1">HOME</a>
    <h2>Informations client</h2>

    <?php
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les données du formulaire
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $adresse = $_POST["adresse"];
        $ville = $_POST["ville"];
        $code_postal = $_POST["code_postal"];

        // Afficher les données dans un tableau XHTML
        echo "<table border='2'>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Adresse</th>
                    <th>Ville</th>
                    <th>Code Postal</th>
                </tr>
                <tr>
                    <td>$nom</td>
                    <td>$prenom</td>
                    <td>$adresse</td>
                    <td>$ville</td>
                    <td>$code_postal</td>
                </tr>
            </table>";
    } else {
        
        echo "<p>Aucune donnée à afficher car le formulaire est vide.</p>";
    }
    ?>
 <p><a href="exercice12.php" class="a2 clignotant">Retour</a></p>
</body>
</html>
