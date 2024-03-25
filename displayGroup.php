<?php

$result = $connection->query("select * from renter_group");

while ($row = $result->fetch()) {
	echo '<option value='.$row["group_name"].">".$row["group_name"].'</option>';
}
echo "</select><br><br>". 
'<input type="submit" value="Submit">'
?>