<?php
include('layout/header.php');
?>

<?php
include('layout/menu.php');
?>

<h1>Home page</h1>

<form action="phpbasicform.php" method="post">
  <label for="fname">First Name:</label><br>
  <input type="text" id="fname" name="fname" required><br>
  <label for="lname">Last Name:</label><br>
  <input type="text" id="lname" name="lname" required><br><br>

  <input type="submit" value="Submit">
</form>

<?php
include('layout/footer.php');
?>