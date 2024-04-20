<?php
session_start();
$dir = substr($_SERVER['DOCUMENT_ROOT'], 0, -6);
$usNM = $_SESSION['userr'];
include $dir . '/heed.php';
if ($usNM > '') {
  header("Location: /home");
  exit();
}
$colA = 'none';
$colB = 'none';
$colC = 'none';
$colD = 'none';
$colE = 'none';
$colF = 'none';
if($_SESSION['faii'] == 2) {
    $bob = "<h4>Registration failed: Username already exists</h4>";
    $colA = 'red';
} else if($_SESSION['faii'] == 3) {
    $bob = "<h4>Registration failed: Invalid Username</h4>";
    $colA = 'red';
} else if($_SESSION['faii'] == 4) {
    $bob = "<h4>Registration failed: Invalid Password</h4>";
    $colB = 'red';
} else if($_SESSION['faii'] == 5) {
    $bob = "<h4>Registration failed: Passwords don't match</h4>";
    $colB = 'red';
    $colC = 'red';
} else {
    $bob = "";
}
unset($_SESSION['faii']);
?>
<head>
<link rel="stylesheet" href="style">
<title><?php echo rtrim(file_get_contents($dir . '/title.txt')) ?> - Sign Up</title>
<style>
#message {
    display:none;
    background: #000000;
    bottom: 200px;
    color: #FFFFFF;
    position: fixed;
    padding: 10px;
    margin-top: 10px;
}

#message p {
    padding: 10px 35px;
    font-size: 18px;
}

#messagee {
    display:none;
    background: #000000;
    bottom: 200px;
    color: #FFFFFF;
    position: fixed;
    padding: 10px;
    margin-top: 10px;
}

#messagee p {
    padding: 10px 35px;
    font-size: 18px;
}

.valid {
    color: green;
}

.valid:before {
    position: relative;
    left: -35px;
    content: "✔";
}
.invalid {
    color: red;
}

.invalid:before {
    position: relative;
    left: -35px;
    content: "✖";
}
input {
    width: 20%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    font-size: 20px;
    color: gray;
    background-color: black;
}
h3 {
    color:lime;
    font-size: 20px;
}
h4 {
    color:cyan;
    font-size: 20px;
}
</style>
</head>
<center><a class="titleLinkk" href="/"><h1><?php echo rtrim(file_get_contents($dir . 'title.txt')); ?></h></a></center>
<br>
<div>
<form action="/createAccount" autocomplete="off" method="POST">
<center><?php echo $bob; ?></center>
<h1 style="text-align: center; font-family: Avenir;"><strong>Sign Up</strong></h1>
<h1 style="text-align: center; font-family: Avenir;">Username:</h1>
<h1 style="text-align: center;"><input id="ussm" style="border-color: <?php echo $colA; ?>" name="unsm" type="text" min="6" max="15" title="Should be at least 6 characters long and only contain letters and numbers. Must contain at least one letter." autocomplete="off"/></h1>
<div id="messagee">
  <p id="letterr" class="invalid"><b>Lowercase</b> letter</p>
  <p id="letterrRR" class="valid"><b>No uppercase</b> letters</p>
  <p id="numberr" class="invalid"><b>Number</b></p>
  <p id="lengthh" class="invalid"><b>Minimum 6 characters</b></p>
</div>  
<h1 style="text-align: center; font-family: Avenir;">Password:</h1>
<h1 style="text-align: center;"><input id="psw" style="border-color: <?php echo $colB; ?>" name="pwds" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and 6 to 20 characters long." autocomplete="off"/></h1>
<div id="message">
  <p id="letter" class="invalid"><b>Lowercase</b> letter</p>
  <p id="capital" class="invalid"><b>Uppercase</b> letter</p>
  <p id="number" class="invalid"><b>Number</b></p>
  <p id="length" class="invalid"><b>Minimum 6 characters</b></p>
</div>   
<h1 style="text-align: center; font-family: Avenir;">Confirm Password:</h1>
<h1 style="text-align: center;"><input name="pwdsc" style="border-color: <?php echo $colC; ?>" type="password" autocomplete="off" /></h1>
<h1 style="text-align: center;"><button type="submit" style="border-color: <?php echo $colF; ?>" style="width:282px;" id="crr" class="button" value="Submit">Register</button></h1>
</form>
<br>
<br>
<center><a href="login" class="button">Or Login</a></center><br>
</div>