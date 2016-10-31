<h1>Testataan post-metodia</h1>

<form method="post" action="post.php">
	<label>Etunimi</label>
	<input type="text" name="en" required="">
	<br>
	<label>Sukunimi</label>
	<input type="text" name="sn" required="">
	<br>
	<input type="submit" name="button" value="Lähetä">
</form>

<?php
	if (isset($_POST['button']))
	{
		$enimi=$_POST['en'];
		$sunimi=$_POST['sn'];
		echo "Terve, $enimi $sunimi.";
	}
	

?>