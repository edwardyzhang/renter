<?php
$result = $connection->query("select * from apartments");
echo "<table>";
echo "<tr><th>Address</th><th>Laundry</th><th>Parking</th><th>Rooms</th><th>Bath</th><th>Cost</th><th>Floor</th></tr>";
while ($row = $result->fetch()) {
	
	echo "<tr><td>".$row["address"]."</td><td>".$row["laundry"]."</td>".
	"<td>".$row["parking"]."</td>".
	"<td>".$row["rooms"]."</td>".
	"<td>".$row["baths"]."</td>".
	"<td>".$row["cost"]."</td>".
	"<td>".$row["floor"]."</td>".
	"</tr>";
}
echo "</table>";
?>