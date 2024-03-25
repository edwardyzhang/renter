<?php
$result = $connection->query("select * from room");
echo "<table>";
echo "<tr><th>Address</th><th>Laundry</th><th>Parking</th><th>Bath</th><th>Cost</th><th>Floor</th><th>Kitchen</th><th>Roomates</th></tr>";
while ($row = $result->fetch()) {
	
	echo "<tr><td>".$row["address"]."</td><td>".$row["laundry"]."</td>".
	"<td>".$row["parking"]."</td>".
	"<td>".$row["baths"]."</td>".
	"<td>".$row["cost"]."</td>".
	"<td>".$row["floor"]."</td>".
    "<td>".$row["kitchen"]."</td>".
    "<td>".$row["roommates"]."</td>".
	"</tr>";
}
echo "</table>";
?>