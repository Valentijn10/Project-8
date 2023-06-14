<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Valentijn Standaart -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Update Products stap 1</title>
</head>
<body>
    <main>
        <h1>Update Products stap 1</h1>
        <p>
            Dit formulier wordt gebruikt om de gegevens te wijzigen in de tabel products.
        </p>
        <form action="updateproducts2.php" method="post">
            Welk Products id wilt u wijzigen?
            <input type="number" name="prodIdvak"> <br>
            <input type="submit">
        </form>
    </main>
</body>
</html>