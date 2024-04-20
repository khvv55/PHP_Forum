<?php
$dir = substr($_SERVER['DOCUMENT_ROOT'], 0, -6);
session_start();
$usNM = $_SESSION['userr'];
include $dir . '/heed.php';
if ($usNM <= '') {
  header("Location: /login");
  exit();
}

$idid = $_GET['id'];
$lines = file($dir . "postINF/" . $idid);
$title = rtrim($lines[0]);
$img = rtrim($lines[1]);
$author = rtrim($lines[2]);
$likes = rtrim($lines[3]);







?>
<head>
<link rel="stylesheet" href="style">
<style>
h1,p,h4,p6,p5 {
  font-family: Avenir;
}
p {
  font-size:30px;
}
a:hover {
  font-size: 30px;
}
.bg1 {
  background-color: #333333;
  color:white;
  border-radius:10px 10px 10px 10px;
  font-size:60%;
  padding:10px;
}
.bg2 {
  background-color: #333333;
  color:white;
  border-radius:10px 10px 10px 10px;
  font-size:60%;
  padding:10px;
}
.info {
  background: #444444;
  border-radius:10px;
  padding:10px;
  width:50%;
}
.rating {
  position: absolute;
  background: #444444;
  border-radius:10px;
  padding:10px;
  width:40%;
  right:20;
  transform: translateY(-80%);
}
.review {
  font-size:20px;
  background: #333333;
  border-radius: 10px;
  padding:15px;
}
.box {
  background-color: #333333; 
  color:#FFFFFF; 
  padding: 15px; 
  border-radius: 10px; 
  font-family: Avenir; 
  font-size: 20px; 
  width:50%;
}
</style>
<title>Forum - Post</title>
</head>
<p5>&nbsp;</p>
<?php
  if(file_exists($dir . 'Sites' . $img)) {
      echo '<img src="' . $img . '" width="400" length="400" align="right" style="margin-right:20px;">';
  }
?>
<div class="info">
<p>Post ID: <strong><font color="#5ee4ff"><?php echo $idid; ?></font></strong></p>
<p>Title: <strong><font color="#5ee4ff"><?php echo $namee; ?></font></strong><p>
<p>Author: <strong><a href="/user?u=<?php echo $auth; ?>"><font color="#5ee4ff"><?php echo $auth; ?></font></strong></a>
</div>
</div>
<br>
<div class="box"><font style="color:aqua; font-size:30px;">Post</font><br><br><?php echo str_replace("\n", "<br>", file_get_contents($dir . 'postDat/' . $idid . '.txt')); ?></div><br>
<br><br>
<form method="POST" action="like">
  <input type="hidden" value="<?php echo $idid; ?>" name="id">
  <input type="submit" style="width:220px;" value="<?php echo $favB; ?>" class="button" >
</form>
<br><br>
<form method="POST" action="comment">
  <input type="hidden" value="<?php echo $idid; ?>" name="idd">
  <textarea name="cmnt" rows="7" cols="50">
</form>
<h style="font-size:30px;">Comments</h><hr>
<br>
<?php 

$rv = file($dir . 'comments/' . $idid . '.txt');

foreach($rv as $r) {
  $k = explode(';', $r);
  $usr = $k[0];
  $time = $k[1];
  array_shift($k);
  array_shift($k);
  $comment = implode(";", $k);
  echo '<div class="review"><font style="font-size:35px;">' . $ . '</font><br><h>' . $usr . ' - <i>' . $msg . '</i></h><font style="float:right;">' . $time . '</font></div>';
}
?>
<br><br>