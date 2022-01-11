<?php
  $login = false;
  $showError = false;
  if($_SERVER['REQUEST_METHOD'] == "POST"){
      include 'dbconnect.php';
      $user_name = $_POST['username'];
      $pass_word = $_POST['password'];
      $sql = "Select * from admin where uname='$user_name' AND password='$pass_word'";
      $result = mysqli_query($con, $sql);
      $num = mysqli_num_rows($result);
      if($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $user_name;
        header("location: index.php");

      }
    else{
      $showError =  "Invalid Username or password";
    }
  }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php
    if($login){
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> You are logged in
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>';
    }
    if($showError){
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> '. $showError.'
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
      </div> ';
    }
    ?>
    <div class="center">
      <h1>Login</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text" name="username" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <input type="submit" value="Login">
       
      </form>
    </div>

  </body>
</html>

