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
        $username = $_POST['username'];
        $password = $_POST['password'];
        echo 'Welcome Back! ' .
        htmlspecialchars($username, ENT_QUOTES, 'UTF-8');
        ?>
        
         <h1>Bookazon</h1>

        <ul>
            <li><a href="index.php">Home</a></li>
            
        </ul>
  


    </body>
</html>
