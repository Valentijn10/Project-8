<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Vincent Kroon -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Delete Supplier 2</title>
</head>
<body>
<main>
    <?php
    // klantid uit het formulier halen
    $supid = $_POST["supidvak"];

    // klant gegevens uit de tabel halen
    require_once "Suppliers.php";
    
    $supplier = new Supplier();
    $supplier->searchSupId($supid);
    $supplier->afdrukkenSupplier();

    echo "<form class='form-container' action='deleteSupplier3.php' method='post'>";
    // klantid mag niet meer gewijzigd worden
    echo "<input type='hidden' name='supidvak' value='$supid>";
    // Waarde 0 doorgegeven als er niet gecheckt wordt
    echo "<input type='hidden' name='verwijdervak' value='0'>";
    echo "<input type='checkbox' name='verwijdervak' value='1'>";
    echo "Verwijder dit artikel. <br />";
    echo  "<br>";
    echo "<input type='submit'>";
    echo "</form>";
    ?>
</main>
</body>
</html>