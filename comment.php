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

if(isset($_POST['cmnt'])) {
	$cmnt = $_POST['cmnt'];
} else {
	$cmnt = "";
	header("Location: home");
	exit();
}

if($usNM <= '') {
	header("home");
	exit();
}

if(!file_exists($dir . 'comments/' . $idid . '.txt')) {
	header("Location: home");
	exit();
}

$comment_info = $usNM . ';' . date("D-M-Y H:i:s") . ';' . $cmnt;

$handler = fopen($dir . 'comments/' . $idid . '.txt', 'a');

fwrite($handler, $comment_info);

fclose($handler);

header("Location: view_post?id=" . $idid);
exit();

?>