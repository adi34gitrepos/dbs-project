<?php
  $showAlert= false;
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'dbconnect.php';
    $food_name=$_POST['Food_name'];
    $food_price=$_POST['Food_price'];
    $food_type=$_POST['Food_type'];
    $sql= "INSERT INTO `Food`(`Food_id`,`Food_name`,`Food_price`,`Food_type`) VALUES (NULL,'$food_name','$food_price','$food_type')";
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
    <title>New Food</title>
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
 <?php include 'navbar_food.php'; ?>
 <br>


   <div class="container">
     <div class="row">

        <div class="page-header">
            <h1 style="text-align: center;">Add New Food</h1>
            <?php echo $msg; ?>



      </div>
       <div class="col-md-3">

       </div>
        <div class="col-md-6 animated bounceIn">



                <br>
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data" >

                <div class="input-group">
                  <span class="input-group-addon"><b>Food Name</b></span>
                  <input id="Food_name" type="text" class="form-control" name="Food_name" placeholder="Enter Food Name">
                </div>
                <br>

                 <div class="input-group">
                  <span class="input-group-addon"><b>Food Price</b></b></span>
                  <input id="Food_price" type="text" class="form-control" name="Food_price" placeholder="Price">
                </div>
                <br>
                 <div class="input-group">
                  <span class="input-group-addon"><b>Food Type</b></b></span>
                        <select class="form-control" name="Food_type" id="Food_type">
                            <option value="none">Select Type</option>
                            <option value="breakfast">Breakfast</option>
                            <option value="lunch">Lunch</option>
                            <option value="snacks">Snacks</option>
                        </select>
                    </div>
                  <br>


                 <!--<div class="input-group">
                  <span class="input-group-addon"><b>Photo</b></span>
                  <input  type="file" class="form-control" name="file">

              </div>-->


                 <br>
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
