<?php 
session_start();

$mysqli = new mysqli('localhost', 'root', '', 'fypweb') or die (mysqli_error($mysqli));

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM animals WHERE id=$id") or die ($mysqli->error());

    header("location: your_animals.php");
}
?>