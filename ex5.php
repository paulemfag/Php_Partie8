<?php
$page = 'Exercice 5';
include 'header.php';
        setcookie('username', 'username. ');
        setcookie('password', 'password.');
?>
<p><?= 'Votre nom d\'utilisateur est : ' .$_COOKIE['username']; ?></p>
<p><?= 'Votre mot de passe est : ' .$_COOKIE['password']; ?></p>
<?php include 'footer.php'; ?>