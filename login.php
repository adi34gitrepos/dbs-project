<?php
  $user_name = $_POST['username'];
  $pass_word = $_POST['password'];


  //Database connection here
  $con = new mysqli("localhost","root","","canteen");
  if($con->connect_error) {
    die("Failed to connect : ".$con->connect_error);
  }else{
    $stmt = $con->prepare("select * from admin where uname = ?");
    $stmt->bind_param("s", $user_name);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0) {
      $data = $stmt_result->fetch_assoc();
      if($data['password'] == $pass_word) {
        echo "<h2>LoginSuccesfully</h2>";
      }else {
        echo "<h2>Invalid Username or password</h2>";
      }
    }else{
        echo "<h2>Invalid Username or password</h2>";
    }
  }
?>
