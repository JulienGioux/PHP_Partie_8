<?php 
    if ((!isset($_POST['id']) || !isset($_POST['pwd'])) && (!isset($_COOKIE['id']) || !isset($_COOKIE['pwd']))) {
        header('Location: index.php');
        exit();
    }

    if ((isset($_POST['id']) && isset($_POST['pwd'])) && (!empty($_POST['id']) && !empty($_POST['pwd']))) {
        $id = $_POST['id'];
        $pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
        if (!isset($_COOKIE['id']) && !isset($_COOKIE['pwd'])) {        
            setcookie("id", $id, time()+3600, "/", "php-partie8");
            setcookie("pwd", $pwd, time()+3600, "/", "php-partie8");
            header('Location: result.php');
            exit();
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
    <title>PHP Partie 8 Exercice 2 résultat</title>
</head>
<body>
    <?php var_dump($_COOKIE) ?>
    <pre>
        <?php print_r($_COOKIE) ?>
    </pre>
    <p>
    identifiant : <?= $_COOKIE['id'] ?>
    <br>
    Mot de passe : <?= $_COOKIE['pwd'] ?>
    </p>
</body>
</html>