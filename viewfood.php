<?php
    $connection= mysqli_connect("localhost","root","","canteen");

    session_start();

    $sql= "SELECT * FROM `Food`";
    $res=mysqli_query($connection,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List of Foods</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/stylea.css">

</head>

<body  >

   <div id="myDiv">

   <?php include 'navbar_food.php'; ?>
   <br><br><br>
   <div class="container">
      <?php
        if(mysqli_num_rows($res)>=0){ ?>

      <div class="container">
         <div class="row">
             <div class="col-md-3"></div>
             <div class="col-md-6 foo">
                 <div class="page-header">
                    <h1 class="animated bounceIn" style="text-align: center;">Foods Offered</h1>
                  </div>
                  <table class="table">
                    <thead>
                        <th>Food Name</th>
                        <th>Food Price</th>
                        <th>Food Type</th>
                    </thead>

                    <?php while($row=mysqli_fetch_assoc($res)) {  ?>
                    <tbody>
                        <tr>
                            <td><?php echo $row["Food_name"]; ?></td>

                            <td><?php echo $row["Food_price"] ?></td>
                            <td><?php echo $row["Food_type"] ?></td>
                        </tr>
                    </tbody>
                <?php } }?>
                </table>
             </div>
             <div class="col-md-3"></div>
         </div>

      </div>

   </div>
    </div>

 <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>


  <script>
        window.sr = ScrollReveal();
        sr.reveal('.foo', { duration: 800 });
        sr.reveal('.foo1', { duration: 800,origin: 'top'});
    </script>




</body>
</html>
