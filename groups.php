<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Rental Groups</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
  <?php
  include 'connectdb.php';
  ?>
	<script src="index.js"></script>
    <h1>Listing of current rental groups</h1>

    <p>This is your go to website to find any of your housing related needs </p>
    <?php
    include 'getGroups.php';
    ?>
  </body>

</html>