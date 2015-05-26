<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Konferencja</title>
<link rel="stylesheet" href="images/BrightSide.css" type="text/css" />

<script type="text/javascript">

</script>
</head>
<body>

	<div id="wrap">
	<?php include 'php_parts/headmenu.php';?>
		<div id="content-wrap">
			<?php include 'php_parts/sidemenu.php';?>

			<div id="main">
			<?php include 'model/connect.php';?>
				<a name="TemplateInfo"></a>
				
				<h1>
					Organizacja <span class="green">Konferencji</span>
				</h1>
				<p>
				W konferencji biorą udział autorzy, zakładająć konto w systemie (własnoręcznie) i zgłaszając prace. 
				Po recenzji uaktualniają swoje prace. 
				</p>
				<p>
				Recenzja wykonywana jest przez recenzentów, którzy wypełniają odpowiedni (definiowany) formularz recenzji dla przydzielonych artykułów. 
				</p>
				<p>
				Organizator rozsyła mailingi do autorów i recenzentów (część emaili wprowadza własnoręcznie, importując je np. z pliku csv, część dostaje od samych autorów, dzięki rejestracji). 
				</p>
				<p>
				Edytor wysyła zaproszenia do recenzentów na wprowadzone wczesniej emaile. Recenzent zgadza się lub odmawia recenzji, zgadzając się określa jaka tematyka go interesuje (wybiera z listy dostępnych tematów). 
				Edytor przydziela tym recenzentom, którzy się zgodzili na recenzje artykuły. Jest określony czas na recenzję, gdy zbliża się koniec system automatycznie wysyła powiadomienie o braku recenzji do tych, 
				którzy ich jeszcze nie wprowadzili.
				</p>
				<p> 
				Organizator układa formularz rejestracji, informacje dot. hoteli, posiłków, imprez dodatkowych.
				W trakcie rejestracji (po akceptacji artykułu) autor wybiera odpowiednie opcje z formularza rejestracji. System umożliwia wydruki odpowiednich raportów.
				</p>
				<input class="button" type="button" onclick=<?php echo "lalalalal"?> value="PHP" >
				<p id="demo"></p>
			</div>
		</div>
	</div>
</body>
</html>
