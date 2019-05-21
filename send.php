<?php
$mysqli = new mysqli('localhost', 'root', '', 'fypweb') or die (mysqli_error($mysqli));

if (isset($_POST['send'])) {
    $send_user = $_POST['send_user'];
    $username = $_POST['username'];
    $message = $_POST['message'];

    $mysqli->query("INSERT INTO message (send_user, username, message) VALUES ('$send_user', '$username', '$message')")
    or die ($mysqli->error);

    header('location: index_login.php');
}
?>