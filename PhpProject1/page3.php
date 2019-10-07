<?php
session_start();
echo "<h3>Hello ".$_SESSION['userID']."</h3>";
echo "<a href = 'page4.php'><input type = 'submit' value = 'Log Out' /></a>";
