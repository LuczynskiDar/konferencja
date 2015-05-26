

<div id="header">
	<table style="border: none;" >
	<tr>
		<td>
		<h1 id="logo">Witamy<span class="green">na</span><span class="gray">konferencji</span></h1>
			<h2 id="slogan">Put your company slogan here...</h2>
		</td>
		<td id="logform" style="text-align: right;">
		<?php include 'php_parts/forms/loginform.php';?>
		</td>
	</tr>
	</table>
    </form>
			<ul>
				<li id="current"><a href="index.php" target="_main"><span>Strona główna</span></a></li>
				<li><a href="index.php" target="_main"><span>Komitet</span></a></li>
				<li><a href="#"><span>Program</span></a></li>
				<li><a href="#"><span>Informacje</span></a></li>
				<li><a href="adduser.php" target="_main"><span>Uczestnictwo</span></a></li>
				<li><a href="#"><span>Kontakt</span></a></li>
				<?php 
				if (! empty ( $_SESSION ["logged"] )) {	
					echo '<li><a href="userindex.php"><span>Strona użytkownika</span></a></li>';
				}
				?>
					
			</ul>
		</div>'