<?php
session_start();
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
$dir = substr($_SERVER['DOCUMENT_ROOT'], 0, -6);
include $dir . '/heed.php';
$usNM = $_SESSION['userr'];
if ($usNM > '') {
  header("Location: /");
  exit();
}
$x = 2;

$f = 0;


if ($f == 1) {


$USnm = $_POST['unsm'];
$PSwd = $_POST['pwds'];
$PSwdC = $_POST['pwdsc'];
$USnm = htmlspecialchars($USnm, ENT_QUOTES, 'UTF-8');
$PSwd = htmlspecialchars($PSwd, ENT_QUOTES, 'UTF-8');
$PSwdC = htmlspecialchars($PSwdC, ENT_QUOTES, 'UTF-8');

if(file_exists($dir . 'accs/' . $USnm . '/account.txt')) {
	$_SESSION['faii'] = 2;
	$x = 0;
}

if(strlen($PSwd) > 20) {
	$_SESSION['faii'] = 4;
	$x = 0;
}

if(strlen($PSwd) < 6) {
	$_SESSION['faii'] = 4;
	$x = 0;
}

if (!preg_match('/[A-Za-z]/i', $USnm)) {
      $x = 0;
}


$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$charactersLength = strlen($characters);
$randomString = '';
for ($i = 0; $i < 50; $i++) {
    $randomString .= $characters[rand(0, $charactersLength - 1)];
}

if ($PSwd !== $PSwdC) {
	$_SESSION['faii'] = 5;
	$x = 0;
}

if (!preg_match('[^\s]+(?=.*\d)(?=.*[a-z])(?=.*[0-9]).{6,}', $USnm)) {
    $x = 0;
}

if (strpos($USnm, '<') !== false) {
	$x = 0;
}

if (strpos($USnm, '>') !== false) {
	$x = 0;
}

if (strpos($USnm, '\'') !== false) {
	$x = 0;
}

if (strpos($USnm, '"') !== false) {
	$x = 0;
}

if (preg_match("/^.*(?=.{8,20})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $PSwd)) {
	$x = 2;
}

if (strpos($PSwd, '<') !== false) {
	$_SESSION['faii'] = 4;
	$x = 0;
}

if (strpos($PSwd, '>') !== false) {
	$_SESSION['faii'] = 4;
	$x = 0;
}

if (strpos($PSwd, '\'') !== false) {
	$_SESSION['faii'] = 4;
	$x = 0;
}

if (strpos($PSwd, '"') !== false) {
	$_SESSION['faii'] = 4;
	$x = 0;
}


if ($x == 2) {

$filename = $dir . "/accs/" . $USnm;

if (file_exists($filename)) {
    header("Location: signup");
    exit();
} else {
    mkdir($dir . "/accs/" . $USnm, 0777);
    mkdir($dir . "/accs/" . $USnm . "/vendorApp", 0777);
	$handle = fopen($dir . "/accs/" . $USnm . "/account.txt", "a");
	$INfo = $USnm . ":" . $PSwd;
	fwrite($handle, $INfo);
	fclose($handle);
	chmod($dir . "/accs/" . $USnm . "/account.txt", 0777);
	$handlee = fopen($dir . "/accs/" . $USnm . "/bio.txt", "a");
	fwrite($handlee, "");
	fclose($handlee);
	chmod($dir . "/accs/" . $USnm . "/bio.txt", 0777);
	$handlee = fopen($dir . "/accs/" . $USnm . "/msg.txt", "a");
	fwrite($handlee, "");
	fclose($handlee);
	chmod($dir . "/accs/" . $USnm . "/msg.txt", 0777);
	$handlee = fopen($dir . "/accs/" . $USnm . "/vv.txt", "a");
	fwrite($handlee, "");
	fclose($handlee);
	$handlee = fopen($dir . "/accs/" . $USnm . "/notifs.txt", "a");
	fwrite($handlee, "0\n0\n0\n0");
	fclose($handlee);
	$handlee = fopen($dir . "/accs/" . $USnm . "/lastLogin.txt", "a");
	fwrite($handlee, date('Y-m-d'));
	fclose($handlee);
	mkdir($dir . "/accs/" . $USnm . "/msg", 0777);
	$_SESSION['userr'] = $USnm;
	$_SESSION['ffst'] = 1;
	header("Location: enter");
	exit();
}
} else {
	header("Location: /signup");
	exit();
}
} else {
	header("Location: /signup");
	exit();
}
?>