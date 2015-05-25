<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Konferencja</title>
<link rel="stylesheet" href="images/BrightSide.css" type="text/css" />

</head>
<body>

	<div id="wrap">
	<?php include 'php_parts/headmenu.php';?>
		<div id="content-wrap">
			<?php include 'php_parts/sidemenu.php'; ?>

			<div id="main">
			<form action='model/querry_adduser.php' method="post">
				Login:<br>
				<input type="text" name="login" required="required"><br><br>
				Password:<br>
				<input type="password" name="password" required="required"><br><br>
				<input type="submit" value="Wyślij"> <br><br>
			</form>
				
			</div>
			<div id="main">
				<?php 
				include 'model/connect.php';
				include 'model/query.php';
				include 'model/disconnect.php';
				?>
			</div>
			
			
		</div>
	</div>
</body>
</html>
