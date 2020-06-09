<?php 
    session_start();
    $_SESSION['lastName'] = 'Gioux';
    $_SESSION['firstName'] = 'Julien';
    $_SESSION['age'] = 39;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 8 Exercice 2</title>
</head>
<body>
<a href="result.php">Faire passer les variables "lastName", "firstName" et "age" dans la page result.php</a>
</body>
</html>