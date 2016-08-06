        <?php
        $link = mysqli_connect('localhost', 'benny', 'dtycts16');
        if (!$link) {
            $output = 'Unable to connect to the database server.';
            include 'output.html.php';
            exit();
        }
        if (!mysqli_set_charset($link, 'utf8')) {
            $output = 'Unable to set database connection encoding.';
            include 'output.html.php';
            exit();
        }
        $output = 'Database connection established.';
        include 'output.html.php';

        if (!mysqli_select_db($link, 'benny')) {
            $output = 'Unable to locate the joke database.';
            include 'output.html.php';
            exit();
        }
        $output = 'Database connection established.';
        include 'output.html.php';


        $username = $_POST['username'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];

        if ($password == $password2) {
            echo 'Welcome to Bookazon Benny, ENJOY!';
        } else {
            header('Location: join_us2.php');
            echo 'Passwords do not match, please try again.';
            exit();
        }

        $sql = 'INSERT INTO Customer (username, password) '
                . 'values (' . "\"$username\"" . ',' . "\"$password\");";


        if (mysqli_query($link, $sql)) {
            $output = "New record created successfully";
        } else {
            $output = "Error: " . $sql . "<br>" . mysqli_error($link);
        }
        ?>

  
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
          <h1>Welcome to Bookazon!</h1>
        <?php
        echo $output;
        ?>



    </body>
</html>
