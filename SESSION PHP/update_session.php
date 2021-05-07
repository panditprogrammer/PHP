<?php

session_start();
//overwriting the existing data for updating
$_SESSION['username'] = "Chandan";

$_SESSION['password'] = "PaassowrdForUsername";

echo "<br> session update successfully";


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