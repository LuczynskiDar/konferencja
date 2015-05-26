
	<form method="post" class="loginform" action='model/querry_login.php'>
		<?php
		session_start ();
		if (! empty ( $_SESSION ["logged"] )) {
			
			echo "<b>Zalogowany:</b> " . $_SESSION ["logged"] . "<br>";
			session_write_close ();
			echo '<a href="model/logout.php" target="_main"> wyloguj</a>';
		} else {
			session_write_close ();
			echo 'Login: <input type="text" name="login" class="textbox" placeholder="Wpisz login"><br>
		 	Hasło: <input type="password" name="password" class="textbox" placeholder="Wpisz hasło"><br>
				<a href="adduser.php" target="_main">Dodaj użytkownika</a>
		 	<input type="submit" name="search" class="button" value="Zaloguj" style="margin: 5px" />';
		}
		
		?>
