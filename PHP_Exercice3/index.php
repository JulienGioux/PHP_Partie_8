<?php
    if (isset($_COOKIE['id']) && isset($_COOKIE['pwd']))
    {
        $formError = TRUE;
        header('Location: result.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 8 Exercice 3</title>
</head>
<body>
    <form action="result.php" method="post">^
        <fieldset>
            <legend>Connection :</legend>
            <?= (isset($_GET['formError']) && $_GET['formError'] == TRUE) ? 'Les champs de formulaires n\'ont pas été correctement rempli' : '' ?>
            <br>
            <label for="id">Identifiant :</label>
            <input type="text" name="id" id="id">
            <label for="pwd">Password :</label>
            <input type="password" name="pwd" id="pwd">
            <input type="submit" value="ok">
        </fieldset>
    </form>
</body>
</html>