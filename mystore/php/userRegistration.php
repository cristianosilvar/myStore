<?php
  include('connection.php');

  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sqlCode = "SELECT *
              FROM useradmin 
              WHERE username ='$username' || email = '$email'";

  $result = mysqli_query($connection, $sqlCode);

  $number = mysqli_num_rows($result);

  if ($number == 1) {
    function myAlert($msg)
    {
      echo '<script language="javascript">alert("'.$msg.'");</script>';
    }
    myAlert("Usuário e/ ou e-mail em uso. Tente com outros dados");
    exit;
    

    $rt = false;
  }
  else {
    $sqlCode = "INSERT into
                useradmin 
                (username, email, pass)
                values ('$username', '$email', '$password')";
  
    $result = mysqli_query($connection, $sqlCode);
    
    $rt = true;
  }
?>