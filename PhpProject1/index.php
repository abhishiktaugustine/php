<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        ?>
        <form action = "page2.php" method = "POST" enctype = "multipart/form-data">
            <center>
                UserID:<br>
                <input type="text" name="userID" placeholder="Enter UserID" value="" required="" /> <br><br>
            Password:<br>
            <input type="password" name="password" placeholder="Enter Password" value="" required /><br>
            <br>
            <input type="submit" value="Log In" />
            </center>
        </form>
    </body>
</html>
