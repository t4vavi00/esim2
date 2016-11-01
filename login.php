<?php include 'menu.php'; ?>

<h1>Kirjaudu sisään</h1>

<form method="POST" action="login.php">
<TABLE BORDER=0>
	<tr><td>tunnus</td><td><input type="text" name="tunnus"></td></tr>
	<tr><td>salasana</td><td><input type="password" name="salasana"></td></tr>
	<tr><td></td><td><input type="submit" name="button" value="Kirjaudu"></td></tr>
	
</TABLE>


</form>

<?php

	if(isset($_POST['button']))
	{
	
		$oikeatunnus="jeppe";
		$oikeasalasana="test";
		if($_POST['tunnus']==$oikeatunnus)
		{
			if($_POST['salasana']==$oikeasalasana)
			{
				//oikea tunnus ja salasana
				header('Location:oma.php');
			}
			else
			{
			echo "Tunnus tai salasana eivät täsmää";
			}

	
		}
		else
		{
		echo "Tunnus tai salasana eivät täsmää";
		}

	}
?>

<?php include 'footer.php'; ?>