<?php
$result = $connection->query("select distinct(group_name) from renter_group");
echo "<table>";
echo "<tr><th>Current Groups Looking for Houses/Apartments</th></tr>";
while ($row = $result->fetch()) {
	
	echo "<tr><td>".$row["group_name"]."</td>".
	"</tr>";
}
echo "</table><br>";
echo "<form action='/groups.php' method='get'>".
'<label for="Groups">Choose the group name that you would like to see: </label>'.
'<select name="group_name" id="group_name">';
$result = $connection->query("select distinct group_name from renter_group");

while ($row = $result->fetch()) {
	echo '<option value='.$row["group_name"].">".$row["group_name"].'</option>';
}
echo "</select><br><br>". 
'<input type="submit" value="Submit"> <br><br>';

$result = $connection->query("select * from renter_group where group_name ='".$_GET["group_name"]."'");
while ($row = $result->fetch()) {
	echo $row["member_id"]."<br>";
}
?>