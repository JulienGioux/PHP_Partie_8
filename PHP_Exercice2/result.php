<?php 
    session_start();
    $lastName = $_SESSION['lastName'];
    $firstName = $_SESSION['firstName'];
    $age = $_SESSION['age'];
    if (!isset($lastName) || !isset($firstName) || !isset($age)) {
        header('Location: index.php');
        exit();
    }
    var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 8 Exercice 2 résultat</title>
</head>
<body>
    <?= $lastName . ' ' . $firstName . ' ' . $age . 'ans' ?>
</body>
</html>