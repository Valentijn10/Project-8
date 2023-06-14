<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Valentijn Standaart -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Read Products</title>
</head>
<body>
    <main>
        <h1>Read Products</h1>
        <p>
            Lijst van Producten.
        </p>

        <?php
        require "products.php";

        echo "<button><a href='index.php'> Terug naar het menu </a></button>";

        $prod = new Products();
        $prod->readProduct();
        
        ?>
    </main>
</body>
</html>