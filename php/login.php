<?php
 session_start();
 include_once "config.php";
 $email = mysqli_real_escape_string($conn, $_POST['email']);
 $password = mysqli_real_escape_string($conn, $_POST['password']);
 
 if(!empty($email) && !empty($password)){
   //vamos verificar o e-mail e a senha dos usuários que correspondem ao banco de dados 
  $sql = mysqli_query($conn, "SELECTE * FROM users WHERE email = '{$email}' AND password = '{$password}'");
  if(mysqli_fetch_assoc($sql) > 0){
   $row = mysqli_fetch_assoc($sql);
   $_SESSION['unique_id'] = $row['unique_id'];
   echo "sucesso";
  }else{
   echo "Email ou Password está errado";
  }
 }else{
  echo "todos os campos estão completos";
 }
?>