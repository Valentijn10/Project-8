<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Valentijn Standaart -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Search Product name stap 2</title>
</head>
<body>
    <main>
        <h1>Search Product name stap 2</h1>
        <p>
            Dit formulier wordt gebruikt om gegevens te bekijken
            van de product name in de tabel products.
        </p>
        <?php
        // artid uit het formulier halen ---------------------
        $prodName = $_POST["productnamevak"];

        // artikel gegevens uit  de tabel halen -------------------
        require_once "products.php";  

        $prod = new Products();
        $prod->searchProdName($prodName);
        $prod->afdrukkenProduct();

        echo "<button><a href='index.php'> Terug naar het menu </a></button>";

        ?>  
    </main>
</body>
</html>