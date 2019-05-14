<?php
if($_POST) {
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "login";

  $username = $_POST['username'];
  $password = $_POST['password'];

  $conn = mysqli_connect($host, $user, $pass, $db);
  $query = "SELECT * from user where username='$username' and password='$password'";
  $result = mysqli_query($conn, $query);
  if(mysqli_num_rows($result)==1) {
    session_start();
    $_SESSION['login'] = 'true';
    header('location: index.html');
  } else {
    header('location: error_user.html');
  }
}
?>