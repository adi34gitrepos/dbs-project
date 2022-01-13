<?php

   $id= $_GET['Food_id'];

   $conn= mysqli_connect("localhost","root","","canteen");
   $sql="DELETE FROM `Food` WHERE `Food_id`='$id'";
   $result=mysqli_query($conn,$sql);
   if(mysqli_query($conn,$sql)){
       header("Location: viewfood.php");

       }

   else{
         echo "Not deleted";
   }

?>
