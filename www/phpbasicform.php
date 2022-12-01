<?php
include('layout/header.php');
?>

<?php
include('layout/menu.php');
?>

Welcome <?php echo $_POST["fname"]; ?> <?php echo $_POST["lname"]; ?>! <br>

<?php echo "Welcome {$_POST["fname"]} {$_POST["lname"]}!"; ?>

<?php
include('layout/footer.php');
?>