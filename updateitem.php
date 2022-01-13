<!--php code needed here-->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update</title>
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
            <h1 style="text-align: center;">Update Stock</h1>
            <?php echo $msg; ?>



      </div>
       <div class="col-md-3">

       </div>
        <div class="col-md-6 animated bounceIn">



                <br>
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data" >

                <div class="input-group">
                  <span class="input-group-addon"><b>Used Stock</b></span>
                  <input id="Used_stock" type="text" class="form-control" name="Used_stock" placeholder="Enter Used Stock">
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon"><b>Remaining Stock</b></span>
                  <input id="Remaining_stock" type="text" class="form-control" name="Remaining_stock" placeholder="Enter Remaining Stock">
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon"><b>Used Stock</b></span>
                  <input id="Required_stock" type="text" class="form-control" name="Required_stock" placeholder="Enter Required Stock">
                </div>
                <br>

                <div class="input-group">
                  <input type="submit" name="submit" value="Update" class="btn btn-success">

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
