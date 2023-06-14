<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Valentijn Standaart -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Delete product 1</title>
</head>
<body>
<main>
    <h1>Delete product stap 1</h1>
    <p>
        Dit formulier zoekt een product op uit de tabel products van om die te kunnen verwijderen.
    </p>
    <form action="deleteproduct2.php" method="post">
        Welk product wilt u verwijderen?
        <input type="number" name="productnamevak"><br>
        <input type="submit">
    </form>
</main>
</body>
</html>