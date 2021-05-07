<?php

session_start();

//delete all variables all at once
// session_destroy();

//deleting session data
unset($_SESSION['username']);
unset($_SESSION['password']);

echo "<br>session destroy successfully";
?>
<br>
<a href="session_php1.php">Start session</a>
<br>
<a href="read_session.php">read session</a>
<br>
<a href="update_session.php">update session</a>
<br>
<a href="delete_session.php">delete session</a>