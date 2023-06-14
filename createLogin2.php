<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aanmelden</title>
</head>
<body>

    <?php
    require "loginclass.php";
    $loginName = $_POST["loginName"];
    $loginPassword = $_POST["loginPassword"];
    $loginPassword = password_hash($loginPassword, NULL);

    $login = new Login($loginName, $loginPassword);
    $login->createAccount($loginName, $loginPassword);

    ?>

    <a href="index.php">Home</a>
    
</body>
</html>