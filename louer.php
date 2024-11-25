<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Page louer</title>
    <style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.product-container {
    display: flex;
    flex-wrap: wrap; /* Permet aux produits de passer à la ligne suivante */
    justify-content: space-around;
    padding-top: 10%;
}

.product {
    border: 1px solid #ccc;
    padding: 10px;
    margin: 10px;
    text-align: center;
    max-width: 300px;
    flex-basis: calc(33.33% - 20px); /* Répartit les produits sur trois colonnes avec une marge de 10px */
}

#cart {
    position: fixed;
    top: 0;
    right: 0;
    padding: 5px;
    width: 100px;
}

#cart-items {
    list-style-type: none;
    padding: 0;
}

#cart-items li {
    border-bottom: 1px solid #ccc;
    padding: 2px;
}

#total {
    font-weight: bold;
}
.product-image {
    max-width: 100%; /* Assure que l'image ne dépasse pas la largeur du conteneur */
    height: auto; /* Permet de conserver les proportions originales de l'image */
    margin-bottom: 10px; /* Ajoute une marge en bas pour l'espace visuel entre l'image et le texte */
}

        @keyframes blink {
      0% { color: red; }
      50% { color: transparent; }
      100% { color: white; }
    }

    .clignotant {
      animation: blink 1s infinite;
    }

    a{
    text-decoration: none;
    margin-left: 5%;
}
.hh{
    text-align: center;

}

    </style>
</head>
<body>
<p><a href="exercice15.php" class="a2 clignotant">Retour</a></p>
<h2 class="hh">TOUS LES PRODUITS CI-DESSOUS SONT A LOUER</h2>   
<div class="product-container">
        
        <?php
        $products = [
            ["appart 1", "Appart 1 a louer a", 150000, "A1.JPG"],
            ["appart 2", "Appart 2 a louer a", 120000, "A3.JPG"],
            ["appart 3", "Appart 3 a louer a", 200000, "A4.jpg"],
            ["house 1", "Maison a vendre a ", 50000000, "loge4.jpeg"],
            ["house 2", "Maison a vendre a", 60000000, "loge5.jpeg"],
            ["house 3", "Maison a vendre a", 70000000, "loge6.jpeg"]
        ];

        foreach ($products as $product) {
            echo '<div class="product">';
            echo '<img class="product-image" src="' . $product[3] . '" alt="' . $product[0] . '">';
            echo '<h2>' . $product[0] . '</h2>';
            echo '<p>' . $product[1] . '</p>';
            echo '<p>Prix: ' . $product[2] . ' CFA</p>';
            echo '<button onclick="addToCart(\'' . $product[0] . '\', ' . $product[2] . ')">Ajouter au panier</button>';
            echo '</div>';
        }
        ?>
    </div>

    <div id="cart">
        <h2>Panier</h2>
        <ul id="cart-items"></ul>
        <p id="total">Total: 0 CFA</p>
    </div>

    <script>
        let cartItems = [];

        function addToCart(productName, price) {
            cartItems.push({ name: productName, price: price });
            updateCart();
        }

        function updateCart() {
            const cartList = document.getElementById("cart-items");
            const totalElement = document.getElementById("total");
            let total = 0;

            // Clear the cart
            cartList.innerHTML = '';

            // Update the cart
            cartItems.forEach(item => {
                const listItem = document.createElement("li");
                listItem.textContent = `${item.name} - ${item.price} €`;
                cartList.appendChild(listItem);
                total += item.price;
            });

            totalElement.textContent = `Total: ${total} €`;
        }
    </script>
</body>
</html>
