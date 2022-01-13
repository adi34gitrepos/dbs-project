<?php
  $showAlert= false;
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'dbconnect.php';

    $item_name=$_POST['Item_name'];
    $item_stock=$_POST['Remaining_stock'];
    $food_id=$_POST['Food_id'];
    $sql= "INSERT INTO `Items` (`Item_id`, `Item_name`, `Used_stock`, `Remaining_stock`, `Required_stock`, `Food_id`, `Userid`) VALUES (NULL, '$item_name', '', '$item_stock', '', '$food_id', '0');";
    $result= mysqli_query($con,$sql);
    if($result){
      $showAlert=true;
    }
    if($result==true){
        $msg= "<script language='javascript'>
                                   swal(
                                        'Success!',
                                        'Food Insertion Completed!',
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
    <title>New Item</title>
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
 <?php include 'navbar_item.php'; ?>
 <br>


   <div class="container">
     <div class="row">

        <div class="page-header">
            <h1 style="text-align: center;">Add New Item</h1>
            <?php echo $msg; ?>



      </div>
       <div class="col-md-3">

       </div>
        <div class="col-md-6 animated bounceIn">



                <br>
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data" >

                <div class="input-group">
                  <span class="input-group-addon"><b>Item Name</b></span>
                  <input id="Item_name" type="text" class="form-control" name="Item_name" placeholder="Enter Item Name">
                </div>
                <br>
                 <!--<div class="input-group">
                  <span class="input-group-addon"><b>Category</b></b></span>
                        <select class="form-control" name="Category" id="Category">
                            <option value="none">Select Type</option>
                            <option value="breakfast">Breakfast</option>
                            <option value="lunch">Lunch</option>
                            <option value="snacks">Snacks</option>
                        </select>
                    </div>-->
                  <div class="input-group">
                    <span class="input-group-addon"><b>Initial Stock</b></span>
                    <input id="Remaining_stock" type="text" class="form-control" name="Remaining_stock" placeholder="Enter Initial Stock">
                  </div>
                  <br>
                  <div class="input-group">
                    <span class="input-group-addon"><b>Food ID</b></span>
                    <input id="Food_id" type="text" class="form-control" name="Food_id" placeholder="Enter Food Id">
                  </div>
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
