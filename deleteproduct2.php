<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Valentijn Standaart -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Delete product 2</title>
</head>
<body>
<main>
    <h1>Delete product stap 2</h1>
    <p>
        Op product gegevens zoeken uit de tabel products zodat ze verwijderd kunnen worden.
    </p>
    <?php
    // klantid uit het formulier halen
    $prodID = $_POST["productnamevak"];

    // klant gegevens uit de tabel halen
    require_once "products.php";
    
    $prod = new Products();
    $prod->searchProdName($prodName);
    $prod->afdrukkenProduct();

    echo "<form action='deleteproduct3.php' method='post'>";
    // product mag niet meer gewijzigd worden
    echo "<input type='hidden' name='productnamevak' value='$prodName>";
    // Waarde 0 doorgegeven als er niet gecheckt wordt
    echo "<input type='hidden' name='verwijdervak' value='0'>";
    echo "<input type='checkbox' name='verwijdervak' value='1'>";
    echo "Verwijder product. <br><br>";
    echo "<input type='submit'>";
    echo "</form>";
    ?>
</main>
</body>
</html>