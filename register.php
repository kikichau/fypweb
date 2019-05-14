<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "login";

$conn = mysqli_connect($host, $user, $pass, $db) Or DIE ("Unable to connect db");

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
    if($conn->query($sql) === TRUE) {
        header('location: success_user.html');
    } else {
        header('location: error_user.html');
    }
    $conn->close();
}
?>