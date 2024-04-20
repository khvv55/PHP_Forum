<?php
session_start();
$dir = substr($_SERVER['DOCUMENT_ROOT'], 0, -6);
$usNM = $_SESSION['userr'];
if ($usNM > '') {
  header("Location: /home");
  exit();
}

$f = 0;

if($_SESSION['loginFail'] > 4) {
	header("Location: /login");
	exit();
}

if(!isset($_SESSION['lastAttempt'])) {
	$_SESSION['lastAttempt'] = time();
} else {
	if((time() - $_SESSION['lastAttempt']) < 10) {
		$_SESSION['fai'] = 6;
	}
}




if ($f == 1) {

$usNM = $_POST['userr'];
$psWD = $_POST['passs'];
$usNM = htmlspecialchars($usNM, ENT_QUOTES, 'UTF-8');
$psWD = htmlspecialchars($psWD, ENT_QUOTES, 'UTF-8');

function faill() {
	$_SESSION['fai'] = 1;
	header("Location: /login");
	exit();
}

if ($usNM <= '') {
	header("Location: /login");
	exit();
}

if ($psWD <= '') {
	header("Location: /login");
	exit();
}
$checkFile = $dir . "/accs/" . $usNM . "/account.txt";
$handleee = fopen($checkFile, "r") or die(faill());

$isActually = fgets($handleee);

$shouldBe = $usNM . ":" . $psWD;




if($suspend === '2') {
	$_SESSION['fai'] == 4;
	header("Location: /login");
	exit();
}

if($suspend === '3') {
	$_SESSION['fai'] == 5;
	header("Location: /login");
	exit();
}


if($_SESSION['fai'] < 1) {

if ($isActually === $shouldBe) {



$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$charactersLength = strlen($characters);
$randomString = '';
for ($i = 0; $i < 50; $i++) {
    $randomString .= $characters[rand(0, $charactersLength - 1)];
}

$_SESSION['token'] = $randomString;

$_SESSION['fai'] = 0;

$_SESSION['userr'] = $usNM;


$_SESSION['lastAction'] = time();
$_SESSION['strikemove'] = 0;
$_SESSION['mode'] = '0';

header("Location: /home");
exit();




} else {
	$_SESSION['fai'] = 1;
	header("Location: /login");
	exit();
}
} else {
	$_SESSION['fai'] = 2;
	header("Location: /login");
	exit();
}
} else {
	header("Location: /login");
	exit();
}
?>
