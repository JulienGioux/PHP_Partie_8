<?php
    $string = 'Firefox';
    $css = False;
    if(stristr($_SERVER['HTTP_USER_AGENT'], $string)) {
           $css = TRUE;
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 8 Exercice 1</title>
    <style>
    .firefox {
        background-color: orange;
    }
    </style>
</head>
<body class="<?= $css ? 'firefox' : '' ?>">
    <p><b>Votre navigateur :</b> 
    <?= $_SERVER['HTTP_USER_AGENT'] ?>
    <br><b>Votre ip :</b>
    <?= $_SERVER['REMOTE_ADDR'] ?>
    <br><b>Nom du serveur :</b>
    <?= $_SERVER['SERVER_NAME'] ?>
    </p>
    <?php var_dump($_SERVER) ?>

</body>
</html>