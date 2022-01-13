<?php
    if(!isset($_SESSION))
    {

        session_start();
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order</title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/stylea.css">
</head>
<body>
   <?php include 'navbar_order.php'?>
   <br><br>
   <div class="container">
       <div class="row">
           <div class="page-header">
               <h1 style="text-align: center">Order Panel</h1>
           </div>
           <div class="col-md-2"></div>
           <div class="col-md-8">
               <p align="center">Create and view Order details</p>
           </div>
           <div class="col-md-2"></div>
       </div>
   </div>
</body>
</html>
