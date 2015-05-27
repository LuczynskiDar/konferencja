
	<form method="post" class="loginform" action='model/queries.php?qt=login'>
		<?php
		session_start ();
		if (! empty ( $_SESSION ["logged"] )) {
			
			echo "<b>Zalogowany:</b> " . $_SESSION ["logged"] . "<br>";
			session_write_close ();
			echo '<a href="model/logout.php" target="_main"> wyloguj</a>';
		} else {
			session_write_close ();
			echo '
			<table style="text-align: right;">
			<tr>
			<td>Login:</td><td> <input type="text" name="login" class="textbox" placeholder="Wpisz login"></td>
			</tr>
			<tr>		
		 	<td>Hasło:</td><td colspan="2"> <input type="password" name="password" class="textbox" placeholder="Wpisz hasło"></td>
			</tr>
			<tr>
			<td><a href="adduser.php" target="_main" style="text-align: right">Dodaj użytkownika</a></td>
		 	<td colspan="2"><input type="submit" name="search" class="button" value="Zaloguj" style="margin: 5px" /></td>	
			
			</tr>
			</table>';
		}
		
		?>
		