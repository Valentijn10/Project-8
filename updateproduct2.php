<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Valentijn Standaart -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Update Product stap 2</title>
</head>
<body>
    <main>
        <h1 >Update Artikel stap 2</h1>
        <p>
            Dit formulier wordt gebruikt om gegevens te wijzigen
            van de artikel in de tabel products.
        </p>
        <?php
        // name uit het formulier halen
        $prodName = (int)$_POST["productnamevak"];

        require_once "products.php";  

        $prod = new Products();
        // Product gegevens uit  de tabel halen
        $prod->searchProdName($prodName);

        ?>
        
        <!-- Formulier voor nieuwe gegevens -->
        <form action="updateproduct3.php" method="post">
            Product name: <?php echo $prodName ?><br>
            <input type="hidden" name="productnamevak" value="<?php echo $prodName ?>">
            Ingredient ID: <input type="text" name="ingredientidvak" value="<?php echo $prod->getIngredID()?>"><br>
            Product Categorie: <input type="number" name="productcategoryvak" value="<?php echo $prod->getProdCategory()?>"><br>
            Product Glas type: <input type="number" name="productglasstypevak" value="<?php echo $prod->getProdGlassType()?>"><br>
            Product instructie: <input type="number" name="productinstrctionvak" value="<?php echo $prod->getProdInstruction()?>"><br><br>
            <input type="submit">
        </form>
    </main>
</body>
</html>