<?php
session_start();
echo "Log Out Successful!<br><br>";
session_destroy();
echo "<a href = 'index.php'><input type = 'submit' value = 'Log In' /></a>";

