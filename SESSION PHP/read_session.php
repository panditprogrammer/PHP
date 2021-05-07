<?php

session_start();

if (isset($_SESSION['username'])) {
    echo "Your username is ";
    echo $_SESSION['username'];
    echo "<br>";
    echo "Your password is ";
    echo $_SESSION['password'];
}
else
{
    echo "Username not exist!";
}

?>
<br>
<br>
<a href="session_php1.php">Start session</a>
<br>
<a href="read_session.php">read session</a>
<br>
<a href="update_session.php">update session</a>
<br>
<a href="delete_session.php">delete session</a>