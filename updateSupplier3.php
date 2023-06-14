<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Vincent Kroon -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Update Supplier stap 3</title>
</head>
<body>
    <main>
        <h1>Pas een Leverancier aan stap 3</h1>
        <?php
        // klantgegevens uit het formulier halen
        $supID = $_POST["supidvak"];
        $supMaxDelivery = $_POST["supmaxdeliveryvak"];
        $supMinDelivery = $_POST["supmindeliveryvak"];
        $ingredID = $_POST["ingredidvak"];
        $ingredName = $_POST["ingrednamevak"];
        $ingredDescription = $_POST["ingreddescriptionvak"];
        $supAdress = $_POST["supadressvak"];

        require "Suppliers.php";

        $supplier = new Supplier($supMaxDelivery, $supMinDelivery, $ingredID, $ingredName, $ingredDescription, $supAdress, $supID);
        // Update de gegevens in tabel artikelen waar hetzelfde artikel id is
        $supplier->updateSupplier($supID);
        $supplier->afdrukkenSupplier();

        echo "<br>";
        echo "<button class='backtohome'><a href='index.php'> Terug naar het menu </a></button>";
        ?>
    </main>
</body>
</html>