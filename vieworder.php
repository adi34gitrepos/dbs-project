<?php

    $connection= mysqli_connect('localhost','root','','canteen');

    session_start();

    $select_query="SELECT * FROM `Orders`";
    $result= mysqli_query($connection,$select_query);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Details</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>
    <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/stylea.css">

</head>
<body>
    <?php include 'navbar_order.php'; ?>
    <br><br>
    <div class="container">
      <?php
        if(mysqli_num_rows($result)>=0){ ?>

        <div class="row">

            <div class="col-md-12">
                <div class="page-header">
                    <h1 style="text-align: center;">Order Details</h1>

                </div>

                <table id="myTable" class="table table-bordered animated rubberBand">
                    <thead>
                        <th>Food Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Date</th>
                    </thead>
                    <tbody>
                        <?php while($row=mysqli_fetch_assoc($result)) {  ?>
                        <tr>
                            <td><?php echo $row['Food_name']; ?></td>
                            <td><?php echo $row['Quantity']; ?></td>
                            <td><?php echo $row['Price']; ?></td>
                            <td><?php echo $row['Date']; ?></td>
                        </tr>

                    </tbody>
                    <?php } }?>
                </table>


            </div>

        </div>
    </div>
</body>
<script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>
</html>
