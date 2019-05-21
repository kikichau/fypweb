<?php

if($_POST) {
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "fypweb";

  $username = $_POST['username'];
  $password = $_POST['password'];

  $conn = mysqli_connect($host, $user, $pass, $db);
  $query = "SELECT * from users where username='$username' and password='$password'";
  $result = mysqli_query($conn, $query);
  if(mysqli_num_rows($result)==1) {
    session_start();
    $_SESSION['auth'] = 'true';
    header('location: index.php');
  } else {
    header('location: error_user.html');
  }
}
?>