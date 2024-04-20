<?php

session_start();

$usNM = $_SESSION['userr'];

include $dir . '/heed.php';

if(isset($_POST['id'])) {
	$idid = $_POST['id'];
} else {
	$idid = "";
	header("Location: home");
	exit();
}

if($usNM <= '') {
	header("home");
	exit();
}

if(!file_exists($dir . 'postINF/' . $idid . '.txt')) {
	header("Location: home");
	exit();
}

$inf = file($dir . 'postINF/' . $idid . '.txt');

$current_likes = intval($inf[3]);

$new_like = $current_likes + 1;

$inf[3] = $new_like;

implode("", $inf);

$handler = fopen($dir . 'postINF' . $idid . '.txt', "w");
fwrite($handler, $inf);
fclose($handler);

header("Location: view_post?id=" . $idid);
exit();

?>



