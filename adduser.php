<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Konferencja</title>
<link rel="stylesheet" href="images/BrightSide.css" type="text/css" />


</head>
<body>

	<div id="wrap">
	<?php include 'php_parts/menus/headmenu.php';?>
		
			<div id="content-wrap">
			<div id="sidebar"><?php include 'php_parts/menus/sidemenu.php';?></div>

			<div id="main">
				<h1>Dodaj użytkownika</h1>
				<!-- <form action='model/querry_adduser.php' method="post"> -->
				<form action='model/queries.php?qt=adduser' method="post">
					Login:<br> <input type="text" name="login" required="required"
						autocomplete="off"><br> <br> Password:<br> <input type="password"
						name="password" required="required"><br> <br> <input type="submit"
						value="Wyślij"> <br> <br>
				</form>
			</div>
			<div id="main">
				<table class=data>
					<tr>
						<th>User id</th>
						<th>User login</th>
						<th>User password</th>
					</tr>
				<?php
				require_once 'model/queries.php';
				$data=printAllUsers($conn=connect());
				foreach ( $data as $row ) {
					echo "<tr>";
					foreach ( $row as $field ) {
						echo "<td>" . $field . "</td>";
					}
					echo "</tr>";
				}
				$conn->close();
				?>
				</table>
			</div>
</div>
 </div>

</body>
</html>
