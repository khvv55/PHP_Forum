<?php
session_start();
$dir = substr($_SERVER['DOCUMENT_ROOT'], 0, -6);
include $dir . '/heed.php';
$colA = 'none';
$colB = 'none';
if ($_SESSION['fai'] == 1) {
    $bob = "<h4>Login failed!<br>(Incorrect Username or Password)</h4>";
    $colA = 'red';
} else {
    $bob = "";
}

unset($_SESSION['fai']);
$usNM = $_SESSION['userr'];
if ($usNM > '') {
  header("Location: /home");
  exit();
}
?>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/style">
<title><?php echo rtrim(file_get_contents($dir . '/title.txt')) ?> - Login</title>
<style>
input {
    width: 250px;
    padding: 12px;
    margin-top: 6px;
    margin-bottom: 16px;
    font-size: 20px;
    color: gray;
    background-color: black;
}
h1, h2, h3, p {
	color:white;
}
h2 {
	background-color: black;
}
h3 {
    color:lime;
    font-size: 20px;
}
h4 {
    color:white;
    background:red;
    border-radius:10px;
    font-size: 20px;
    padding:10px;
    width:30%;
}
select {  
    font-size: 20px;
    font-family: Avenir;
} 
.loginbox {
	text-align: center;
}
</style>
</head>
<body bgcolor="black">
<div><form style="text-align: center;" autocomplete="off" action="/loginAccount" method="post" enctype="multipart/form-data">
<center><?php echo $bob; ?></center>
<div id="loginbox">
<h1 style="font-family: Avenir;"><strong>Login</strong></h1>
<h1 style="font-family: Avenir;">Username</h1>
<h1 style=""><input type="text" style="border-color: <?php echo $colA; ?>" name="userr" autocomplete="off" required="true" /></h1>
<h1 style="text-align: center; font-family: Avenir;">Password</h1>
<center><h1><input style="border-color: <?php echo $colA; ?>" type="password"  name="passs" autocomplete="off" required="true" /></h1></center>
<h1 style=""><button type="submit" style="width:282px;" class="button" value="Submit">Login</button></h1>
</form></div>
</div>
<br>
<center><a href="register" class="button">Register</a></center><br>
</body>
<br><br><br><br><br><br>