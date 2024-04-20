<?php
$usNM = $_SESSION['userr'];
$dir = substr($_SERVER['DOCUMENT_ROOT'], 0, -6);

$hedd = file_get_contents($dir . "/hed.txt"); echo $hedd;



if((time() - $_SESSION['lastAction']) <= 1) {
	$_SESSION['strikemove'] = $_SESSION['strikemove'] + 1;
}

if((time() - $_SESSION['lastAction']) >= 10) {
	$_SESSION['strikemove'] = 0;
}

if((time() - $_SESSION['lastAction']) >= 1200) {
	$_SESSION['strikemove'] = 0;
	$_SESSION['lastAction'] = 0;
	session_destroy();
	header("Location: /");
}


$_SESSION['lastAction'] = time();

if($_SESSION['strikemove'] > 5) {
	$_SESSION['strikemove'] = 0;
	$_SESSION['lastAction'] = 0;
	session_destroy();
	header("Location: protection");
}
?>
<meta name="viewport" content="width=device-width, initial-scale=1" /> 
<script>
	setTimeout('document.getElementById("disb").innerHTML = "This site does not use javascript, you may disable it for better security."', 0);
	setTimeout('document.getElementById("disb").style.background = "red"', 0)
	setTimeout('document.getElementById("disb").style.borderRadius = "10px"', 0)
	setTimeout('document.getElementById("disb").style.padding = "10px"', 0)
	setTimeout('document.getElementById("disb").style.fontWeight = "bold"', 0)
</script>
<br><br>
<p1 id="disb"></p1>