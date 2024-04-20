<?php
session_start();
$dir = substr($_SERVER['DOCUMENT_ROOT'], 0, -6);
$usNM = $_SESSION['userr'];
if ($usNM <= '') {
  header("Location: /login");
  exit();
}

include $dir . '/heed.php';



?>
<head>
 <link rel="stylesheet" href="style">
  <title>PHP Forum - Post</title>
  <style>
    textarea {
    width: 90%;
    height: 400px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-top: 6px;
    margin-bottom: 16px;
    font-size: 15px;
    color: gray;
    background-color: black;
}
select {  
  font-size: 15px;
  font-family: Avenir;
} 
input[type=checkbox]
{
  transform: scale(2);
}
h2 {
    font-size:15px;
}
h4 {
    color:white;
    background:red;
    border-radius:10px;
    font-size: 15px;
    padding:10px;
    width:30%;
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
    line-height: 15px;
    color: #FFFFFF;
    font-size: 15px;
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
    border-radius: 170%;
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
    border-radius: 170%;
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
input {
    font-size:15px;
}
.input {
    display: inline;
    width:170%;
    text-align: center;
}
input {
    border-radius:10px;
}
</style>
</head>

<br>
<br>
<br>
<center><h2 style="color:cyan;">Please make sure you have read the <a style="color:#00FF00:" href="info#rules">rules</a>!</h2></center>
<br>

<form enctype="multipart/form-data" action="/sharePost" method="POST">
<h2 style="text-align: center;">Post Title</h2>
<div style="text-align: center;"><input type="text" maxlength="55" name="title" required="required" autocomplete="off"/></div><br>
<br>
<p style="text-align: center;"><textarea data-gramm_editor="false" cols="80" maxlength="10000" name="content" rows="10" required="required"></textarea></p>
<h1 style="text-align: center;">Image</h1>
<h2 style="text-align: center;"><input class="button" type="file" name="fileToUpload" id="fileToUpload" required="true" /></h2>
<h2 style="text-align: center; font-family: Avenir;">Captcha:</h2>
<center><img src="c.php" align="middle" width="300"></center>
<center><input type="text" name="cappp" autocomplete="off" /></center>
<br>
<h2 style="text-align: center;"><input type="submit" class="button" value="Create Listing" /></h2>
</form>
</div>';
?>