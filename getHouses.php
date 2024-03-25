<?php
$result = $connection->query("select * from house");
echo "<table>";
echo "<tr><th>Address</th><th>Laundry</th><th>Parking</th><th>Rooms</th><th>Bath</th><th>Cost</th><th>Detached</th><th>Fenced</th></tr>";
while ($row = $result->fetch()) {
	
	echo "<tr><td>".$row["address"]."</td><td>".$row["laundry"]."</td>".
	"<td>".$row["parking"]."</td>".
	"<td>".$row["rooms"]."</td>".
	"<td>".$row["baths"]."</td>".
	"<td>".$row["cost"]."</td>".
	"<td>".$row["detached"]."</td>".
	"<td>".$row["fenced"]."</td>".
	"</tr>";
}
echo "</table>";
?>