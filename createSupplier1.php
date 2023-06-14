<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Vincent Kroon -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Supplier stap 1</title>
</head>
<body>
    <header>

    </header>
    <main>
        <h1>Creëer Leverancier stap 1</h1>
        <form action="createSupplier2.php" method="post">
                Leverancier Maximale Bestelling:<input type="number"   name="supmaxdeliveryvak">      <br>
                Leverancier Minimale Bestelling:<input type="number"   name="supmindeliveryvak">      <br>
                Ingrediënt ID:                  <input type="number"   name="ingredidvak">            <br>
                Ingrediënt Naam:                <input type="text"     name="ingrednamevak">          <br>
                Ingrediënt Beschrijving:        <input type="text"     name="ingreddescriptionvak">   <br>
                Leverancier Adress:             <input type="text"     name="supadressvak">           <br>
                <input type="submit">
        </form>
    </main>
    <footer>

    </footer>
</body>
</html>