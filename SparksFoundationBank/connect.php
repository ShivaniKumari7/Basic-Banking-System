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
         $con=mysqli_connect("localhost","root","","sparks bank","3308") or die(mysqli_error($con));
         
         if($con->connect_error){
             die("failed". $con->connect_error);
         }
         
         
        ?>

        
    </body>
</html>
