<?php
require 'model/islogged.php';
isLogged();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Konferencja</title>
<link rel="stylesheet" href="images/BrightSide.css" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">

</script>
</head>
<body>

	<div id="wrap">

	<?php
	include 'php_parts/menus/headmenu.php';
	?>
		<div id="content-wrap">
			<div id="sidebar">
		<?php
		include 'php_parts/menus/organizermenu.php';
		include 'php_parts/menus/reviewermenu.php';
		include 'php_parts/menus/authormenu.php';
		include 'php_parts/menus/editormenu.php';
		include 'php_parts/menus/settingsmenu.php';
		?>
		</div>
		
			<div id="main">
			<input type="button" onclick='$("#main").load("php_parts/forms/authorforms/addarticle.php");' value="Sprawdzamy">
		<a onclick='$("#main").load("php_parts/forms/authorforms/addarticle.php");'> sprawdzamy </a>
				<h1>
					Organizacja <span class="green">Konferencji</span>
				</h1>
				<p>W konferencji biorą udział autorzy, zakładająć konto w systemie
					(własnoręcznie) i zgłaszając prace. Po recenzji uaktualniają swoje
					prace. Recenzja wykonywana jest przez recenzentów, którzy
					wypełniają odpowiedni (definiowany) formularz recenzji dla
					przydzielonych artykułów. Organizator rozsyła mailingi do autorów i
					recenzentów (część emaili wprowadza własnoręcznie, importując je
					np. z pliku csv, część dostaje od samych autorów, dzięki
					rejestracji). Edytor wysyła zaproszenia do recenzentów na
					wprowadzone wczesniej emaile. Recenzent zgadza się lub odmawia
					recenzji, zgadzając się określa jaka tematyka go interesuje
					(wybiera z listy dostępnych tematów). Edytor przydziela tym
					recenzentom, którzy się zgodzili na recenzje artykuły. Jest
					określony czas na recenzję, gdy zbliża się koniec system
					automatycznie wysyła powiadomienie o braku recenzji do tych, którzy
					ich jeszcze nie wprowadzili. Organizator układa formularz
					rejestracji, informacje dot. hoteli, posiłków, imprez dodatkowych.
					W trakcie rejestracji (po akceptacji artykułu) autor wybiera
					odpowiednie opcje z formularza rejestracji. System umożliwia
					wydruki odpowiednich raportów.</p>
			</div>
		</div>
	</div>
</body>
</html>
