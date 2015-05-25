<?php
$sql="SELECT * FROM users";
$result=mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	echo '<table ">
			<tr>
				<td>User id</td>
				<td>User login</>
				<td>User password</td>
			</tr>';
	while ($row=mysqli_fetch_assoc($result))
	{
		echo '<tr>';
		echo "<td>" . $row["user_id"]. "</td><td>" . $row["user_login"]. "</td><td>" . $row["user_password"]. "</td>";
		echo '</tr>';
	}
}
else {
	echo "0 results";
}


?>