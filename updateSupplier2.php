<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Vincent Kroon -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Update Supplier stap 2</title>
</head>
<body>
    <main>
        <?php
        // supplier id uit het formulier halen
        $supID = (int)$_POST["supidvak"];

        require_once "Suppliers.php";  

        $supplier = new Supplier();
        // supplier gegevens uit  de tabel halen
        $supplier->searchSupID($supID);

        ?>
        
        <!-- Formulier voor nieuwe gegevens -->
        <form class="form-container"action="updateSupplier3.php" method="post">
            Leverancier ID: <?php echo $supID ?><br>
            <input type="hidden" name="supidvak" value="<?php echo $supID ?>">
            Leverancier Maximale Bestelling: <input type="number" name="supmaxdeliveryvak" value="<?php echo $supplier->getSupMaxDelivery()?>"><br>
            Leverancier Minimale Bestelling: <input type="number" name="supmindeliveryvak" value="<?php echo $supplier->getSupMinDelivery()?>"><br>
            Ingrediënt ID: <input type="number" name="ingredidvak" value="<?php echo $supplier->getIngredID()?>"><br>
            Ingrediënt Naam: <input type="text" name="ingrednamevak" value="<?php echo $supplier->getIngredName()?>"><br>
            Ingrediënt Beschrijving: <input type="text" name="ingreddescriptionvak" value="<?php echo $supplier->getIngredDescription()?>"><br>
            Leverancier Adress: <input type="text" name="supadressvak" value="<?php echo $supplier->getSupAdress()?>"><br>
            <input type="submit">
        </form>
    </main>
</body>
</html>