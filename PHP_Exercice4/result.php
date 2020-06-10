<?php 
    $connected = FALSE;
    if (!isset($_POST['id']) || !isset($_POST['pwd']))
    {
        header('Location: index.php');
        exit();
    }



    if ((isset($_POST['id']) && !empty($_POST['id'])) && (isset($_POST['pwd']) && !empty($_POST['pwd']))) {
        if (!isset($_COOKIE['id']) || !isset($_COOKIE['pwd'])) {
            $id = htmlspecialchars($_POST['id']);
            $pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);        
            setcookie("id", $id, time()+3600, "/", "php-partie8");
            setcookie("pwd", $pwd, time()+3600, "/", "php-partie8");
            header('Location: index.php');
            exit();
        }
        if ($_COOKIE['id'] == htmlspecialchars($_POST['id']) && password_verify($_POST['pwd'], $_COOKIE['pwd'])) {
            $connected = TRUE;
        }
    } else {
        header('Location: index.php');
        exit();
    }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 8 Exercice 4 - résultat</title>
</head>
<body>
    <p>
    <b style="color:red"><?= ($connected) ? 'CONNECTED !' : 'NOT CONNECTED !' ?></b>
    <br>
    identifiant : <?= ($connected) ? $_COOKIE['id'] : 'Réinitialisez le cookie' ?>
    <br>
    Mot de passe : <?= ($connected) ? $_COOKIE['pwd'] : 'Réinitialisez le cookie' ?>
    <br>
    <a href="index.php">Réessayer</a>
    <br>
    <a href="modify.php">modifier vos identifiants</a>
    </p>
</body>
</html>