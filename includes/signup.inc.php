<?php 

if($_SERVER["REQUEST_METHOD"]== "POST"){
  
  $name = htmlspecialchars($_POST["name"], ENT_QUOTES, 'UTF-8');
  $email = htmlspecialchars($_POST["email"], ENT_QUOTES, 'UTF-8');
  $username = htmlspecialchars($_POST["uid"], ENT_QUOTES, 'UTF-8');
  $pwd = htmlspecialchars($_POST["pwd"], ENT_QUOTES, 'UTF-8');
  $pwdRepeat = htmlspecialchars($_POST["pwdrepeat"], ENT_QUOTES, 'UTF-8');

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';


  if(emptyInputSignup($name,$email, $username, $pwd, $pwdRepeat) !== false){
    header("location: ../signup.php?error=emptyinput");
    exit();
  }
  if(invalidUid($username) !== false){
    header("location: ../signup.php?error=invaliduid");
    exit();
  }

  if(invalidEmail($email) !== false){
    header("location: ../signup.php?error=invalidemail");
    exit();
  }
  if(pwdMatch($pwd, $pwdRepeat) !== false){
    header("location: ../signup.php?error=passwordsdontmatch");
    exit();
  }
  if(uidExists($conn, $username, $email) !== false){
    header("location: ../signup.php?error=usernametaken");
    exit();
  }

 createUser($conn, $username, $email, $name, $pwd);


}

else{
  header("location: ../signup.php");
  exit();
}

