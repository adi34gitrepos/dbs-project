<?php
    session_start();
     $connection= mysqli_connect('localhost','root','','canteen');

    $select_query="SELECT * FROM `Items`";
    $result= mysqli_query($connection,$select_query);
    $Items=mysqli_fetch_assoc($result);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Item Details</title>
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
    <?php include 'navbar_item.php'; ?>
    <br><br>
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="page-header">
                    <h1 style="text-align: center;">Item Details</h1>

                </div>

                <table id="myTable" class="table table-bordered animated rubberBand">
                    <thead>
                        <th>Food Id</th>
                        <th>Item Name</th>
                        <th>Used Stock</th>
                        <th>Remaining Stock</th>
                        <th>Required Stock</th>
                        <th>Delete Item</th>
                    </thead>
                    <tbody>

                        <tr>
                            <td><?php echo $Items['Food_id']; ?></td>
                            <td><?php echo $Items['Item_name']; ?></td>
                            <td><?php echo $Items['Used_stock']; ?></td>
                            <td><?php echo $Items['Remaining_stock']; ?></td>
                            <td><?php echo $Items['Required_stock']; ?></td>
                            <td><a class="btn btn-danger" onclick="return confirm('Are u sure?')" href="deleteitem.php?id=<?php echo $row['Item_id']; ?>">Delete</a></td>
                        </tr>

                    </tbody>
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
