<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Vincent Kroon -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Read Supplier</title>
</head>
<body>
    <main>
        <?php
        require "Suppliers.php";

        echo "<button class='backtohome'><a href='index.php'> Terug naar het menu </a></button>";

        $supplier = new Supplier();
        $supplier->readSuppliers();
        
        ?>
    </main>
</body>
</html>