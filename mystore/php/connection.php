<?php
  $name_server = 'localhost';
  $name_user = 'root';
  $password = '';
  $name_bd = 'banco';
  
  $connection = mysqli_connect($name_server, $name_user, $password, $name_bd);

  if (mysqli_connect_errno()) {
    echo 'Houve um erro na conexão ao banco de dados';
  }
?>