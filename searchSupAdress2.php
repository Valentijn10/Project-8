<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Vincent Kroon -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Search Supplier Adress stap 2</title>
</head>
<body>
    <main>
        <h1>Zoek Leverancier Adress</h1>
        <?php
        // sup adress uit het formulier halen
        $supAdress = $_POST["supadressvak"];

        // supplier gegevens uit  de tabel halen 
        require_once "Suppliers.php";  

        $supplier = new Supplier();
        $supplier->searchSupAdress($supAdress);
        $supplier->afdrukkenSupplier();

        echo "<button class='backtohome'><a href='index.php'> Terug naar het menu </a></button>";

        ?>
    </main>
</body>
</html>