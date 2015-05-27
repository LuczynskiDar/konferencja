<?php
require '../../../model/islogged.php';
isLogged("../../index.php");
?>

<form action="" style="size: 100%;">
Podaj tytuł artykułu<br>
<input type="text" name="title" required="required" width="80" size="100%"><br>
Podaj tematykę artykułu:<br>
<select name="category">
<option value="Botanika">Botanika</option>
<option value="Elektronika">Elektronika</option>
<option value="Biotechnologia">Biotechnologia</option>
<option value="Farmacja">Farmacja</option>
</select><br>
Podaj dane współautorów:<br>
<textarea rows="20" cols="20" name="secondaryauthors"></textarea><br>
Załącz artykuł (format pdf):<br>
<input type="file" name="file"><br>
<input type="submit" class="button" value="Dodaj Artykuł">
<br>
</form>
<?php 