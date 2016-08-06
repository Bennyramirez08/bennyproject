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
        <h1>Passwords Do Not Match Please Try Again</h1>
        <form action="confirmation.php" method="post">

            <fieldset>
                <legend>Account Information</legend>


                Email Address:<br>
                <input type="text" name ="username">
                <br>
                Password:<br>
                <input type="password" name ="password">
                <br>
                Confirm Password:<br>
                <input type="password" name ="password2">
                <br><br>
                <input type ="submit" value ="create account"

            </fieldset>
    </body>
</html>
