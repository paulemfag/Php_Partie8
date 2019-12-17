<?php
$page = 'Exercice 2';
include 'header.php';
session_start();
$_SESSION['firstName'] = 'Paul-Emmanuel';
$_SESSION['lastName'] = 'Fagot';
$_SESSION['age'] = '18';
?>
<a href="http://phppartie8.info/sessionEx2.php">Clique moi !</a>
<?php include 'footer.php'; ?>