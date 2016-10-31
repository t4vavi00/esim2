<?php include "menu.php"; ?>
<h1>Asiakkaat</h1>
<?php
	
	include "yhteys.php";

	$sql="SELECT etunimi, sukunimi FROM asiakkaat";
	$asiakkaat=$db->query($sql);

	foreach ($asiakkaat as $rivi) 
	{
		echo $rivi['etunimi'].' '.$rivi['sukunimi'].'<br>';
	}
	
	
?>
<?php include "footer.php"; ?>