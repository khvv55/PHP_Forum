<?php
session_start();
$dir = substr($_SERVER['DOCUMENT_ROOT'], 0, -6);
$usNM = $_SESSION['userr'];
if ($usNM <= '') {
  header("Location: /login");
  exit();
}



if ($_POST['cappp'] == $_SESSION['cAp']) {
  $f = 1;
} else {
  $f = 0;
  $notT = 1;
}
$f = 1;
if ($f == 1) {

function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}

$usNM = $_SESSION['userr'];
$title = $_POST['title'];
$content = $_POST['content'];
$idid = rand(100000,1000000);

$content = str_replace("\n", "<br>", $content);


$handler = fopen($dir . 'postDat/' . $idid, 'w');
fwrite($handler, $content);
fclose($handler);



$titlee = base64_encode($title);
$contentc = base64_encode($content);

$file = $_FILES['fileToUpload'];
$fileName = $_FILES['fileToUpload']['name'];
$fileTmpName = $_FILES['fileToUpload']['tmp_name'];
$fileSize = $_FILES['fileToUpload']['size'];
if($fileSize > 5000000) {
  header("Location: sell");
  exit();
  $notT = 1;
}
$fileError = $_FILES['fileToUpload']['error'];

$fileExt = explode('.', $fileName);

$fileActualExt = strtolower(end($fileExt));

$allowed = array('jpg', 'jpeg', 'png');
$destForUse = '';
if (in_array($fileActualExt, $allowed)) {
  $fileNameNew = uniqid('', true) . "." . $fileActualExt;
  $fileDestination = $dir . 'Sites/image/' . $fileNameNew;
  $destForUse = '/image/' . $fileNameNew;
  $realDestForUse = $destForUse;
  move_uploaded_file($fileTmpName, $fileDestination);
} else {
  header("Location: upload");
  exit();
  $notT = 1;
}

if($notT == 0) {



$postINF = $title . "\n" . $realDestForUse . "\n" . $userr . "\n0";


$handler = fopen($dir . "postINF/" . $idid, "w");
fwrite($handler, $postINF);
fclose($handler);

chmod($dir . "postINF/" . $idid, 0777);


$handler = fopen($dir . "postDAT/" . $idid, "w");
fwrite($handler, $content);
fclose($handler);

chmod($dir . "postDAT/" . $idid, 0777);



$handler = fopen($dir . 'comments/' . $idid . '.txt', "w");
fwrite($handler, "");
fclose($handler);

header("Location: home");
exit();
}
} else {
  header("Location: listings");
  exit();
}
?>