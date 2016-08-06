<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Account Verification</title>
    </head>
    <body>
        <?php
        
                
                
        $from = "bennyramirez08@gmail.com";
        $to = "bennyramirez08@gmail.com";
        $subject = "Account Creation";
        $body = "\n\nCongratulations, you are now a member of Bookazon! Please verify your account.";
        $host = "ssl://smtp.gmail.com";
        $port = "465";
        $username = "bennyraimrez08@gmail.com";
        $password = "luzbenet101@#";

        $headers = array(
            'From' => $from,
            'To' => $to,
            'Subject' => $subject);

        $smtp = Mail::factory('smtp', array(
                    'host' => $host,
                    'port' => $port,
                    'auth' => true,
                    'username' => $username,
                    'password' => $password));

        $mail = $smtp->send($to, $headers, $body);

        if (PEAR::isError($mail))
            die($mail->getMessage());
        ?>

      
       
      
    </body>
</html>
