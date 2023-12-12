<?php

if($_SERVER["REQUEST_METHOD"]== "POST"){

$username = htmlspecialchars($_POST["uid"], ENT_QUOTES, 'UTF-8');
$pwd = htmlspecialchars($_POST["pwd"], ENT_QUOTES, 'UTF-8');

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if (emptyInputLogin($username, $pwd) !== false) {
header("location: ../login.php?error=emptyinput");
exit();
}

loginUser($conn, $username, $pwd);

} else {
header("location: ../login.php");
exit();
}


$sel = "SELECT * FROM phpproject01";
$query = mysqli_query($conn, $sel);
$result = mysqli_fetch_assoc($query);

