<?php
function isLogged($link="index.php")
{
session_start ();
$target="Location: ".$link;
if (empty ( $_SESSION ["logged"] )) {
	session_write_close ();
	header ($target);
	exit ();
}
session_write_close ();
}
?>