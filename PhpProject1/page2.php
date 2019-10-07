<?php
$userid = $_POST["userID"];
$pword = $_POST["password"];

$link = mysqli_connect("localhost","root", "","dac");
$query = "SELECT * from login WHERE UserID='$userid'";
$result = mysqli_query($link,$query);
if(mysqli_num_rows($result)>0){
    session_start();
    $_SESSION['userID'] = $userid;
    echo "Log-in Succesful!<br><br>";
    echo "<a href = 'page3.php'>Go to Page 3</a>";
}else{
    echo "User with UserID: '$userid' does not exist!<br><br>";
    echo "<a href = 'index.php'><input type = 'submit' value = 'Log In' /></a>";
}
