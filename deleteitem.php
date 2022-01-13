<?php

   $id= $_GET['Item_id'];

   $conn= mysqli_connect("localhost","root","","canteen");
   $sql="DELETE FROM `Items` WHERE `Item_id`='$id'";
   $result=mysqli_query($conn,$sql);
   if(mysqli_query($conn,$sql)){
       header("Location: viewitem.php");

       }

   }else{
         echo "Not deleted";
   }

?>
