<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Vincent Kroon -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Delete Supplier 3</title>
</head>
<body>
<main>
    <h1>Delete Supplier stap 3</h1>
    <?php 
    // gegevens uit het formulier halen
    $supID = (int)$_POST["supidvak"];
    $verwijderen = $_POST["verwijdervak"];

    // supplier gegevens verwijderen
    if ($verwijderen)
    {
        require "Suppliers.php";
        $supplier = new Supplier();
        $supplier->deleteSupplier($supID);
        echo "<p>De gegevens zijn verwijderd. <br /></p>";
    }
    else
    {
        echo "<p>De gegevens zijn niet verwijderd. <br /></p>";
    }

    echo "<br>";
    echo "<button class='backtohome'><a href='index.php'>Terug</a></button>";
    ?>
</main>
</body>
</html>