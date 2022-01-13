<?php
  $showAlert= false;
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'dbconnect.php';
    $food_name=$_POST['Food_name'];
    $quantity=$_POST['Quantity'];
    $price=$_POST['Price'];
    $date=$_POST['Date'];
    $sql= "INSERT INTO `Orders` (`ord_id`, `Food_name`, `Quantity`, `Price`, `Date`) VALUES (NULL, '$food_name', '$quantity', '$price', 
      '$date')";
    $result= mysqli_query($con,$sql);
    if($result){
      $showAlert=true;
    }
    if($result==true){
        $msg= "<script language='javascript'>
                                   swal(
                                        'Success!',
                                        'Food Order Created!',
                                        'success'
                                        );
              </script>";
    }
  }
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Order</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <link rel="stylesheet" href="css/sweetalert2.css">
    <script src="css/sweetalert2.min.js"></script>


  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="css/stylea.css">
    <link rel="stylesheet" href="css/animate.css">
</head>
<body>
 <?php include 'navbar_order.php'; ?>
 <br>


   <div class="container">
     <div class="row">

        <div class="page-header">
            <h1 style="text-align: center;">Add New Order</h1>
            <?php echo $msg; ?>



      </div>
       <div class="col-md-3">

       </div>
        <div class="col-md-6 animated bounceIn">



                <br>
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data" >

                <div class="input-group">
                  <span class="input-group-addon"><b>Food Name</b></span>
                  <input id="Fname" type="text" class="form-control" name="Food_name" placeholder="Enter Food Name">
                </div>
                <br>
                <div class="input-group">
                 <span class="input-group-addon"><b>Quantity</b></b></span>
                 <input id="Quantity" type="text" class="form-control" name="Quantity" placeholder="Enter Quantity">
               </div>  
                <br>
                <div class="input-group">
                 <span class="input-group-addon"><b>Price</b></b></span>
                 <input id="Price" type="text" class="form-control" name="Price" placeholder="Enter Price">
               </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon"><b>Order Date</b></span>
                  <input id="order_date" type="text" class="form-control" name="Date" placeholder="Enter order date" required>
                </div>

                <script>
                  $( function() {
                    $( "#order_date" ).datepicker();

                  } );



                </script>
                <br>

                <div class="input-group">
                  <input type="submit" name="submit" class="btn btn-success">

                </div>

                <br>
                <br>
                <br>
              </form>
        </div>
        <div class="col-md-3"></div>

     </div>


    </div>



</body>
</html>
