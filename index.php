<?php
$page = 'Exercice 1';
include 'header.php';
?>
<p> USER AGENT : <?= $_SERVER['HTTP_USER_AGENT']; ?></p>
<p>IP ADRESS : <?= $_SERVER['REMOTE_ADDR']; ?></p>
<p>SERVER NAME : <?= $_SERVER['SERVER_NAME'] ?></p>
<?php include 'footer.php'; ?>
