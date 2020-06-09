<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 8 Exercice 1</title>
</head>
<body>
    <p><b>Votre navigateur :</b> 
    <?= $_SERVER['HTTP_USER_AGENT'] ?>
    <br><b>Votre ip :</b>
    <?= $_SERVER['REMOTE_ADDR'] ?>
    <br><b>Nom du serveur :</b>
    <?= $_SERVER['SERVER_NAME'] ?>
    </p>
</body>
</html>