<?php
  function myAlert($msg, $url)
  {
      echo '<script language="javascript">alert("'.$msg.'");</script>';
      echo "<script>document.location = '$url'</script>";
  }

  include('connection.php');

  $user = $_POST['user'];
  $password = $_POST['password'];

  $sqlCode = "SELECT *
              FROM useradmin 
              WHERE username = '$user' OR email = '$user'";

  $result = mysqli_query($connection, $sqlCode);

  $number = mysqli_num_rows($result);

  if ($number == 1) {

    $dados = mysqli_fetch_array($result);
    $id = $dados['id'];

    $sqlCode = "SELECT *
                FROM useradmin 
                WHERE id = '$id' AND pass = '$password'";

    $result = mysqli_query($connection, $sqlCode);

    $number = mysqli_num_rows($result);

    if ($number == 1) {
      header("location: ../index.php");
    }
    else {
      myAlert("Usuário ou Senha icorretos! Verifique os dados inseridos!","../presentation.php");
      exit;
    }
  }

  else {
    myAlert("Usuário ou Senha icorretos! Verifique os dados inseridos!","../presentation.php");
    exit;
  }
?>