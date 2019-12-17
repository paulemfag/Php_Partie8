<?php
$page = 'Exercice 4';
include 'header.php';
?>
    <p>Votre nom d'utilisateur est : <?= $_COOKIE['username']; ?></p>
    <p>Votre mot de passe est : <?= $_COOKIE['password']; ?></p>
<?php include 'footer.php'; ?>