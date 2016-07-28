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
        ?>

        <form action="index.php" method="post" >

            <fieldset>
                <legend>Account Information</legend>
                First Name:<br>
                <input type ="text" name ="First Name">
                <br>

                Last Name:<br>
                <input type ="text" name= "Last Name">
                <br>

                Email Address:<br>
                <input type="text" name ="Email Address">
                <br>
                Password:<br>
                <input type="text" name ="Password">
                <br>
                Confirm Password:<br>
                <input type="text" name ="Confirm Password">
            </fieldset>


            <fieldset>
                <legend>Shipping Address</legend>

                Address Line1:<br>
                <input type="text" name="Adress Line1">
                <br>

                Address Line2:<br>
                <input type="text" name="Adress Line2">
                <br>

                City:<br>
                <input type="text" name="City">
                <br><br>

                State:
                <select name="states">
                    <option value="Select">-Select-</option>
                    <option value="New York City">New York</option>
                    <option value="New Jersey">New Jersey</option>
                    <option value="Florida">Florida</option>
                </select>
                <br><br>

                Zip/ Postal Code:<br>
                <input type="text" name="area code">
                <br>
            </fieldset>

            <fieldset>
                <legend>Billing Information</legend>
                





            </fieldset>




        </form>
    </body>
</html>
