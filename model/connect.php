<?php
$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="konferencja_test";

$conn = new mysqli($host, $user, $password, $dbname, $port, $socket)
or die ('Nie można połączyć z bazą danych' . mysqli_connect_error());
?>
