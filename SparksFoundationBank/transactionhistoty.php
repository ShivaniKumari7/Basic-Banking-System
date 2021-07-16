<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'header.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <br><br>
        <div class="container">
            <h2 class="text-center pt-4">Transaction History</h2>
            <br>
            <div class="table-responsive-sm">
                <table class="table table-hover table-striped table-condensed table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">s.no.</th>
                             <th class="text-center">Sender</th>
                              <th class="text-center">Receiver</th>
                               <th class="text-center">Amount</th>
                                <th class="text-center">Date & Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'connect.php';
                        $sql="select * from transaction";
                        $query=mysqli_query($con,$sql);
                        while($rows=mysqli_fetch_assoc($query)){
                        ?>
                        <tr>
                            <td class="py-2"><?php echo $rows['s.no.'];?></td>
                            <td class="py-2"><?php echo $rows['sender'];?></td>
                            <td class="py-2"><?php echo $rows['receiver'];?></td>
                            <td class="py-2"><?php echo $rows['amount'];?></td>
                            <td class="py-2"><?php echo $rows['datetime'];?></td>
                        </tr>
                            <?php
                        }
                        ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
        <?php
        // put your code here
        include 'footer.php';
        ?>
    </body>
</html>
