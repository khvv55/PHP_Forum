<?php
session_start();
$usNM = $_SESSION['userr'];
$dir = substr($_SERVER['DOCUMENT_ROOT'], 0, -6);
include $dir . '/heed.php';
$keywordd = strtolower($_POST['keyy']);

if($_POST['reset'] === 'true') {
  $keywordd = '';
  $_POST['keyy'] = '';
}

if (strpos($keywordd, '<') !== false) {
  $keywordd = '';
  $_POST['keyy'] = '';
}


if (strpos($keywordd, '>') !== false) {
  $keywordd = '';
  $_POST['keyy'] = '';
}

if (strpos($keywordd, '\'') !== false) {
  $keywordd = '';
  $_POST['keyy'] = '';
}

if (strpos($keywordd, '"') !== false) {
  $keywordd = '';
  $_POST['keyy'] = '';
}

$keywordd = htmlspecialchars($keywordd, ENT_QUOTES, 'UTF-8');
if (strpos($didi, '<') !== false) {
  $keywordd = '';
}

if (strpos($didi, '>') !== false) {
  $keywordd = '';
}

if (strpos($didi, '\'') !== false) {
  $keywordd = '';
}

if (strpos($didi, '"') !== false) {
  $keywordd = '';
}

$_SESSION['ll'] = $_SERVER['REQUEST_URI'];

$boiList = preg_grep('/^([^.])/', scandir($dir . 'postINF/'));
$numList = count($boiList);
$numList = ceil($numList / 6);
if ($numList == 0) {
  $numList = 1;
}
$pageNum = $_POST['a'];
$pageNum = (int)$pageNum;
if($pageNum < 1) {
  $pageNum = 1;
}
$pageNumBack = $pageNum - 1;
$pageNumBack = (string)$pageNumBack;
$pageNumNext = $pageNum + 1;
$pageNumNext = (string)$pageNumNext;


echo '<br>';
echo '<br>';



if($_POST['reset'] === 'true') {
  $boiiListRandom = Array();
  $boiiListRandom = $boiList;
  shuffle($boiiListRandom);
}

if(!isset($boiiListRandom)) {
  $boiiListRandom = Array();
  $boiiListRandom = $boiList;
  shuffle($boiiListRandom);
}




$vendorSearch = $_POST['vendorSearch'];

$tmpMsg = '';

if(isset($_SESSION['tmpNotice'])) {
	if(len($_SESSION['tmpNotice']) > 0) {
	  $tmpMsg = '<h2 style="color: cyan;">' . $_SESSION['tmpNotice'] . '</h2>';
	}
}



?>
<html>
<head>
<link rel="stylesheet" href="style">
<style>
form, table {
     display:inline;
     margin:0;
     padding:0;
}
[type="radio"]:checked,
[type="radio"]:not(:checked) {
    position: absolute;
    left: -9999px;
}
[type="radio"]:checked + label,
[type="radio"]:not(:checked) + label
{
    position: relative;
    padding-left: 28px;
    cursor: pointer;
    line-height: 20px;
    color: #FFFFFF;
    font-size: 20px;
    font-family: Avenir;
}
[type="radio"]:checked + label:before,
[type="radio"]:not(:checked) + label:before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 18px;
    height: 18px;
    border: 1px solid #ddd;
    border-radius: 100%;
    background: #FFFFFF;
}
[type="radio"]:checked + label:after,
[type="radio"]:not(:checked) + label:after {
    content: '';
    width: 12px;
    height: 12px;
    background: #484848;
    position: absolute;
    top: 4px;
    left: 4px;
    border-radius: 100%;
    -webkit-transition: all 0.1s ease;
    transition: all 0.1s ease;
}
[type="radio"]:not(:checked) + label:after {
    opacity: 0;
    -webkit-transform: scale(0);
    transform: scale(0);
}
[type="radio"]:checked + label:after {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
}
select {  
  font-size: 20px;
  font-family: Avenir;
} 
form {
  display:inline;
  margin:0px;
  padding:0px; 
}
td {
  overflow: hidden;
  white-space: nowrap;
}
.buttonv:hover {
  color:#999999;
  background: #110000;
}
.buttonnav {
  color:#FFFFFF;
  position:inherit;
  background: #555555;
  border-color:#FFFFFF;
  border:0;
  font-size:40px;
  font-family:Avenir;
}
footer {
	position: relative;
	transform:translateY(600%);
}
.buttonnav:hover {
  color:#FFFFFF;
  background: #444444;
}
.bg1 {
  background-color: #333333;
  color:white;
  border-radius:10px 10px 10px 10px;
  font-size:100%;
}
.bg2 {
  background-color: #333333;
  color:white;
  border-radius:10px 10px 10px 10px;
  font-size:100%;
}

.catbutton {
  color: white;
  display:inline;
  background: none;
  border: none;
  padding: 0px;
  width: 280px;
  text-align:left;
  margin: -5;
}
.catbutton:hover {
  text-decoration: underline;
}
hr {
  opacity: 0.5;
}
#catsub button {
  color: white;
  font-size: 20px;
  background: none;
  border: none;
  padding: 10px;
  width: 280px;
  text-align:left;
  margin: -5;
}
#catsub button:hover {
  text-decoration: underline;
}
input[type="submit"] {
  padding: 1px;
}
#search {
  float:left;
  width:30%;
}
#catsub{
  float:left;
  position:relative;
  top:700px;
  left:-400px;
  width:30%;
}
#listing {
	position:relative;
	width:85%;
	left:-5%;
	top:-12%;

}
td,.buttonv {
  font-size:15px;
}
.buttonv:hover {
  font-size:15px;
}
footer {
	bottom:10px;
}
#tg {
  border: 1px solid white;
  padding: 5px;
  font-weight: bold;
  font-size:10px;
}
.orderB {
	font-size:20px;
	background:#F50B0B;
	color:white;
	padding:10px;
	border-radius:10px;
	width: 80%;
	display: block;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.orderB:hover {
  color:#f8f8ff;
  background:#8b0000;
  text-decoration: none;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.welcomemsg {
  border-radius: 10px;
  background:#333333;
  padding:20px;
  font-size:20px;
  width:65%;
}
#disb {
  height: 20px;
}
</style>
<title>Forum - Home</title>
</head>
<div>
<p1 id="disb"></p1>
<?php echo $tmpMsg; ?>
</div>
<div id="left">
<br>
<br>
<div id="search">
  <div class="welcomemsg">
    <?php
    if(isset($_SESSION['userr'])) {
      echo '<h style="color: cyan;">Welcome, <font color="#39ff14">' . $usNM . '</font>!</h><br><br>';
    } else {
      header("Location: login");
    }
  
  ?>
  </div>
  <br>
  <div style="background: #333333; border-width:0.5px; border-style:solid;border-radius: 5px; padding:5px; width:300;">
    <form action="/home" method="POST" enctype="multipart/form-data">
    <br>
  <h1 style="font-family:Avenir;">Search: <br></h3><input placeholder="Keywords" style="width:80%;" maxlength="55" type="text" name="keyy" value="<?php echo $_POST['keyy']; ?>">
  </form>
</div>
<br>
<br>
<div style="background: #333333; border-width:0.5px; border-style:solid;border-radius: 5px; padding:5px; font-size: 20px; width:300;">
  <?php
  $folderPath = $dir . 'postINF/';
  $file = glob($folderPath . '*');
  $listingNumber = 0;
  $vendorNumber = 0;
  if ($file != false)
  {
      $listingNumber = count($file);
  }
  $folderPath = $dir . 'accs/';
  $file = glob($folderPath . '*');
  if ($file != false)
  {
      $userNumber = count($file);
  }
  ?>
  <h4>Posts: <?php echo $listingNumber; ?></h4><hr>
  <h4>Users: <?php echo $userNumber; ?></h4>
</div>
</div>
</div>
<br>
<br>
</form><br>
</form>
</div>
<div id="listing">
<table border="1" cellspacing="30" style="border: 0px solid #FFFFFF; font-size: 20px; margin-top:-20px; font-family: Avenir; position:absolute;" width="100%">
  <tr>
    <td style="border: 0px" width="1%"></td>
    <td style="border: 0px" width="1%"></td>
    <td style="border: 0px" width="1%"></td>
    <td style="border: 0px" width="1%"></td>
  </tr>
  <?php
  
  $endNum = ($pageNum*6);
  $startNum = $endNum-6;
  $x = 1;
  $yy = 0;
  $boiList = array_slice($boiList, $startNum, 6);
  foreach ($boiList as &$value) {
    $value = rtrim($value);
    $m = file($dir . 'postINF/' . $value);
    $title = rtrim($m[0]);
    $author = rtrim($m[2]);;
    $likes = rtrim($m[3]);;

    if((strlen($value) == 6) && ($title > '') && ($author > '') && ($likes > '')) { 
    if (((strpos(strtolower($n1), $keywordd) !== false) || $keywordd <= '') && ((strpos($s1, $vendorSearch) !== false) || $vendorSearch <= '')) {
    $valuee = '<div class="tdd"><td bgcolor="#111111"><br><center><a class="buttonv" style="background:#111111; font-size:30px;" href="/view_post?id=' . $value . '">' . $n1 . '</a></center><br><br>' . $xx . '<br><br>User:<a href="/user?u=' . $s1 . '" class="buttonv" style="background:#111111;">' . $s1 . '</a> (' . $totalSale . ')</span><br><br><center><a class="orderB" href="/view_post?id=' . $value . '">Read More</center><br><br></td></div><tr></tr>';
  }
    }
  }
?> 
</table>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer><center>
<?php

$startingpoint = $pageNum - 2;
$endingpoint = $pageNum + 2;

if($pageNum == 1) {
  $startingpoint = $pageNum;
  $endingpoint = $pageNum+4;
} else if($pageNum == $numList) {
  $endingpoint = $pageNum;
  $startingpoint = $pageNum-4;
}

if($numList < 6) {
  $startingpoint = 1;
  $endingpoint = $numList;
}


for ($i=$startingpoint; $i<=$endingpoint; $i++) {
  echo '<form action="/home" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="keyy" value="' . $_POST['keyy'] . '">
  <input type="hidden" name="iid" value="' . $_POST['iid'] . '">
  <input type="submit" class="buttonnav" style="bottom:-400px;width:' . (int)(50/$numList) . '%;" value="' . $i . '">
  </form>';
}
?></center></footer>
</html>
