<?php
$page = 'Exercice 2';
include 'header.php';
session_start();
?>
<p><?= $_SESSION['firstName']. ' ' .$_SESSION['lastName']. ', ' .$_SESSION['age']. ' ans.'; ?></p>
<?php include 'footer.php'; ?>