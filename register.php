<?php

session_start();

$con = mysql_connect('localhost', 'root', '');

mysqli_select_db($con, 'login');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "select * from user where name = '$username'";

$result = mysqli_query($con, $sql);

$num = mysql_num_rows($result);

if($num == 1) {
    echo "Username alreadly taken";
} else {
    $reg = "insert into user (username, password) values ('$username', '$password')";
    mysqli_query($con, $reg);
    echo "Registration Successful";
}