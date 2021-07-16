 <?php
        // put your code here
        include 'connect.php';
        $sql="SELECT * FROM users";
         $result=mysqli_query($con,$sql);
      
        ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="bootstrap/bootstrap-3.3.7-dist/css/bootstrap.css" type="text/css"/>
        <link rel="stylesheet" href="bootstrap/bootstrap-3.3.7-dist/css/bootstrap.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
         <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
         <link rel="stylesheet" type="text/css" href="php.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
                include 'header.php';
        ?>
        <br><br>
         <div class="container">
            <h1>All Users </h1>
            <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                        <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center py-2"> Id</th>
                                     <th scope="col" class="text-center py-2"> Name</th>
                                      <th scope="col" class="text-center py-2"> E-Mail</th>
                                       <th scope="col" class="text-center py-2"> Balance</th>
                                       
                                </tr>    
                            </thead>
                            <tbody>
                                <?php while($rows=mysqli_fetch_assoc($result)){ ?>
                                <tr>
                                    <td class="py-2"> <?php echo $rows['id'] ?></td>
                                    <td class="py-2"> <?php echo $rows['name'] ?></td>
                                    <td class="py-2"> <?php echo $rows['email'] ?></td>
                                    <td class="py-2"> <?php echo $rows['balance'] ?></td>
                                    
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table> 
                    </div>
                </div>
            </div>
        </div>
        <?php
           include 'footer.php';
        ?>
    </body>
</html>
