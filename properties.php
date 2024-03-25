<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Properties</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
  <?php
include 'connectdb.php';
?>
	<script src="index.js"></script>
    <h1>Listing of all properties</h1>

    <p>This is your go to website to find any of your housing related needs </p>
    <h2>List of Apartments </h2>
    <?php
    include 'getApartments.php';
    ?>
    <h2>List of Houses </h2>
    <?php
    include 'getHouses.php';
    ?>
    <h2>List of Rooms </h2>
    <?php
    include 'getRooms.php';
    ?>
  </body>

</html>