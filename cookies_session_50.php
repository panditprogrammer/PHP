<?php
// set and get cookies 
setcookie("Hello","World",86400);

if(isset($_COOKIE["Hello"])){
    echo $_COOKIE["Hello"];
}else{
 echo "Cookies not set";
}

// echo $_COOKIE["Hello"];


echo "<br>";
// session variables 
// initialize the session 
session_start();

// set the session 
$_SESSION["username"] = "I am user";

// get the session 
echo $_SESSION["username"];

// unset the session 
session_unset();
echo $_SESSION["username"];