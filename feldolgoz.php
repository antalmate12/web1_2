<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">

		    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<link rel="stylesheet" href="style.css">

	</head>
	<body>
<?php

	$tmpbool;

	//szerver oldali ellenőrzés példa
	$re = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/';
	if(!isset($_POST['email']) || empty($_POST['jelszo']) || !preg_match($re,$_POST['email']))
	{
		echo "<strong>E-mail</strong>: ".$_POST['email']. " <strong>Hibás</strong>!<br>";
        $tmpbool = false;
	}
	else
	{
		echo "<strong>E-mail</strong>: ".$_POST['email']. " <strong>Helyes</strong>!<br>";
        $tmpbool = true;
	}
	
	if(!isset($_POST['nev']) || empty($_POST['jelszo']) || strlen($_POST['nev']) < 8)
	{
		echo "<strong>Név</strong>: ".$_POST['nev']. " <strong>Hibás</strong>!<br>";
        $tmpbool = false;
	}
	else
	{
		echo "<strong>Név</strong>: ".$_POST['nev']. " <strong>Helyes</strong>!<br>";
		$tmpbool = true;
	}



	if(!isset($_POST['jelszo']) || empty($_POST['jelszo']) || strlen($_POST['jelszo']) < 6 || strlen($_POST['jelszo']) > 12)
	{
		echo "<strong>Jelszó</strong>: ".$_POST['jelszo']." <strong>Hibás</strong>!<br>";
        $tmpbool = false;
	}
	else
	{
		echo "<strong>Jelszó</strong>: ".$_POST['jelszo']. " <strong>Helyes</strong>!<br>";
        $tmpbool = true;
	}

	if(!isset($_POST['kor']) || empty($_POST['kor']) || $_POST['kor'] < 18 || $_POST['jelszo'] > 120)
	{
		echo "<strong>Kor</strong>: ".$_POST['kor']. " <strong>Hibás</strong>!<br>";
		$tmpbool = false;
	}
	else
	{
		echo "<strong>Kor</strong>: ".$_POST['kor']. " <strong>Helyes</strong>!<br>";
		$tmpbool = true;
	}
    
    if($tmpbool)
    {
        include("regisztracio.php");
	}
	else {
		echo "<h1><strong>Hibás</strong> adatok, nem regisztrálsz!</h1>";
	}
	
?>
	</body>
</html>