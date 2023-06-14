<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Vincent Kroon -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Search Supplier Ingrediënt Naam stap 2</title>
</head>
<body>
    <main>
        <h1>Zoek Ingrediënt Levering stap 2</h1>
        <?php
        // ingred name uit het formulier halen
        $ingredName = $_POST["ingrednamevak"];

        // supplier gegevens uit  de tabel halen 
        require_once "Suppliers.php";  

        $supplier = new Supplier();
        $supplier->searchSupplierIngredName($ingredName);
        $supplier->afdrukkenSupplier();

        echo "<button class='backtohome'><a href='index.php'> Terug naar het menu </a></button>";

        ?>
    </main>
</body>
</html>