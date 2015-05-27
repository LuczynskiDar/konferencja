<?php

require 'classes.php';

//$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT, DB_SOCKET) or die ('Nie można połączyć z bazą danych' . mysqli_connect_error());
function connect(){
	$myDB = new mySQL ();
	return $myDB->connect ();
}

?>
