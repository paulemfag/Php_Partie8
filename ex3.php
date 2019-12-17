<?php
$page = 'Exercice 3';
include 'header.php';
    if (!empty($_POST['username']) && !empty($_POST['password'])) { 
        setcookie('username', $_POST['username'], time()+100*1);
        setcookie('password', $_POST['password'], time()+100*1);
        ?>
<a href='ex4.php'><?= 'Vérifier mes informations'; ?></a>
<?php    }
?>
<form action="#" method="POST">
    <fieldset>
        <label for="username">Nom d'utilisateur :</label>
        <input name="username" type="text"  id="username">
        <label for="password">Mot de passe :</label>
        <input name="password" type="password" id="password">
        <input type="submit" href="ex4.php" value="Login">
    </fieldset>
</form>
<?php include 'footer.php'; ?>