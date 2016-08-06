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
        $passwordHash = sha1($_POST['password']);

        $sql = 'SELECT username FROM user WHERE username = ? AND passwordHash = ?';
        $result = $db->query($sql, array($_POST['username'], $passwordHash));
        if ($result->numRows() < 1) {
            /* Access denied */
            echo 'Sorry, your username or password was incorrect!';
        } else 
            /* Log user in */
            printf('Welcome back %s!', $_POST['username']);
            ?>




    </body>
</html>