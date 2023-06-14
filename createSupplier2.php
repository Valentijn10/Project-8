<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Vincent Kroon -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Supplier stap 2</title>
</head>
<body>
    <header>

    </header>
    <main>
        <h1>Creëer Leverancier stap 2</h1>
        <?php
        require "Suppliers.php";

        $supID = NULL;
        $supMaxDelivery = $_POST ["supmaxdeliveryvak"];
        $supMinDelivery = $_POST ["supmindeliveryvak"];
        $ingredID = $_POST ["ingredidvak"];
        $ingredName = $_POST ["ingrednamevak"];
        $ingredDescription = $_POST ["ingreddescriptionvak"];
        $supAdress = $_POST ["supadressvak"];

        // Supplier gegevens invoeren
        $supplier = new Supplier($supMaxDelivery, $supMinDelivery, $ingredID, $ingredName, $ingredDescription, $supAdress);
        
        // Supplier in de database zetten
        $supplier->createSupplier();
        echo "<p>De leverancier is toegevoegd</p><br>";
        echo "<button class='backtohome'><a href='index.php'> Terug naar het menu</a></button>"
        ?>
    </main>
    <footer>

    </footer>
</body>
</html>