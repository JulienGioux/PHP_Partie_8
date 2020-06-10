<?php
    if (isset($_COOKIE['id']) && isset($_COOKIE['pwd'])) {
        $msg = 'Coockies existants : Modifiez vos identifiants.';
        if ((isset($_POST['id']) && !empty($_POST['id'])) && (isset($_POST['pwd']) && !empty($_POST['pwd'])) &&
        (isset($_POST['oldid']) && !empty($_POST['oldid'])) && (isset($_POST['oldpwd']) && !empty($_POST['oldpwd']))) {
            if ($_COOKIE['id'] == htmlspecialchars($_POST['oldid']) && password_verify($_POST['oldpwd'], $_COOKIE['pwd'])) {
            $id = htmlspecialchars($_POST['id']);
            $pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);        
            setcookie("id", $id, time()+3600, "/", "php-partie8");
            setcookie("pwd", $pwd, time()+3600, "/", "php-partie8");
            header('Location: index.php');
            exit();
            } else {
                $msg = 'Erreur d\'identification, recommencez';
            }
        } else {
            $msg = 'Complétez correctement les champs svp.';
        }
        
    }
    if (!isset($_COOKIE['id']) || !isset($_COOKIE['pwd'])) {
        header('Location: index.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 8 Exercice 4 - modifier</title>
</head>
<body>
    <form action="modify.php" method="post">
        <fieldset>
            <legend>Modifier vos Identifiants :</legend>
            <b style="color:red"><?= $msg ?></b>
            <br>
            <label for="oldid">Identifiant :</label>
            <input type="text" name="oldid" id="oldid">
            <label for="oldpwd">Password :</label>
            <input type="password" name="oldpwd" id="oldpwd">
            <br><br>
            <label for="id">Nouveaux Identifiants :</label>
            <input type="text" name="id" id="id">
            <label for="pwd">Password :</label>
            <input type="password" name="pwd" id="pwd">
            <input type="submit" value="ok">
        </fieldset>
    </form>
</body>
</html>