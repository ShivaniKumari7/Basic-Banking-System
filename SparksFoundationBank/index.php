<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sparks Foundation Bank</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="bootstrap/bootstrap-3.3.7-dist/css/bootstrap.css" type="text/css"/>
        <link rel="stylesheet" href="bootstrap/bootstrap-3.3.7-dist/css/bootstrap.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="php.css">
    </head>
    <body>
       
        <?php
        // put your code here
         include 'header.php';
        ?>
        <br><br><br><br>
        
         <div id="banner_image"><center>
        <div class="container">
           
            <div class="row">
            
                <div class="col-lg-12">
                   
                     <img src="img/logo.png" alt="show">
                     <div id="banner_content">
                          
                         <a href="users.php" class="btn btn-danger btn-lg active">View All Users</a><br><br>
                         <a href="Transaction.php" class="btn btn-danger btn-lg active">View Transaction</a><br><br>
                         <a href="transactionhistoty.php" class="btn btn-danger btn-lg active">View Transaction History</a>
                </div>
              
                </div>
            </div>
            
        </div>
             </center></div>
        

        
        <?php
        include 'footer.php';
        ?>
                      
    </body>
</html>
