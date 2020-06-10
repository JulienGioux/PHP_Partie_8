<?php 
    $connected = FALSE;
    if ((isset($_POST['id']) && !empty($_POST['id'])) && (isset($_POST['pwd']) && !empty($_POST['pwd']))) {
        if (!isset($_COOKIE['id']) && !isset($_COOKIE['pwd'])) {
            $id = htmlspecialchars($_POST['id']);
            $pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);        
            setcookie("id", $id, time()+3600, "/", "php-partie8");
            setcookie("pwd", $pwd, time()+3600, "/", "php-partie8");
            header('Location: result.php');
            exit();
        }      
    } elseif (!isset($_COOKIE['id']) || !isset($_COOKIE['pwd']))
    {
        $formError = TRUE;
        header('Location: index.php?formError=' . $formError);
        exit();
    } else {
        $connected = TRUE;
    }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 8 Exercice 2 résultat</title>
</head>
<body>
    <p>
    <b style="color:red"><?= ($connected) ? 'CONNECTED !' : 'NOT CONNECTED !' ?></b>
    <br>
    identifiant : <?= $_COOKIE['id'] ?>
    <br>
    Mot de passe : <?= $_COOKIE['pwd'] ?>
    </p>
</body>
</html>