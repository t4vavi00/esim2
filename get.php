<h1>Testataan get-metodia</h1>

<form method="get" action="get.php">
	<label>Etunimi</label>
	<input type="text" name="en" required="">
	<br>
	<label>Sukunimi</label>
	<input type="text" name="sn" required="">
	<br>
	<input type="submit" name="button" value="Lähetä">
</form>

<?php
	if (isset($_GET['button']))
	{
		$enimi=$_GET['en'];
		$sunimi=$_GET['sn'];
		echo "Terve, $enimi $sunimi.";
	}
	

?>