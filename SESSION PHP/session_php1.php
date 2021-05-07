<?php

session_start();

$_SESSION['username'] = "Panditprogrammer";

$_SESSION['password'] = 12345;

echo "<br>session start successfully";


?>
<br>

<br><br>
<a href="session_php1.php">Start session</a>
<br>
<a href="read_session.php">read session</a>
<br>
<a href="update_session.php">update session</a>
<br>
<a href="delete_session.php">delete session</a>
