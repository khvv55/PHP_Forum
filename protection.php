<?php
session_start();
$dir = substr($_SERVER['DOCUMENT_ROOT'], 0, -6);
$usNM = $_SESSION['userr'];
?>

<head>
<title><?php echo rtrim(file_get_contents($dir . '/title.txt')) ?> - DDOS Protection</title>
<link rel="stylesheet" href="style">
</head>
<br><br>
<?php
if($usNM > '') {
	session_destroy();
	echo '<center><h2 style="color:lime; font-size:40px;">Anti-DDOS Protection Notice</h2></center><br>
<center><h2>We picked up too much traffic from you! Please login and try again. Sorry for the inconvenience.</h2></center><br>
<center><h2 style="color:aqua;"><a href="/login" class="button" style="font-size:30px;">Login</a></h2></center>';
} else {
	echo '<center><h2 style="color:lime; font-size:40px;">Anti-DDOS Protection Notice</h2></center><br>
<center><h2>We picked up too much traffic from you!</h2></center><br>
<center><h2 style="color:aqua;"><a href="/home" class="button" style="font-size:30px;">Home</a></h2></center>';
}
?>