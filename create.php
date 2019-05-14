<?php
$mysqli = new mysqli('localhost', 'root', '', 'fypweb') or die (mysqli_error($mysqli));

if (isset($_POST['submit'])) {
    $date = $_POST['date'];
    $name_title = $_POST['name_title'];
    $type = $_POST['type'];
    $species = $_POST['species'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $basic_ifmt = $_POST['basic_ifmt'];
    $other_ifmt = $_POST['other_ifmt'];
    $name = $_POST['name'];
    $whatsapp = $_POST['whatsapp'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $picture = $_POST['picture'];

    $sql = "INSERT INTO animals (date, name_title, type, species, gender, age, basic_ifmt, other_ifmt, name, whatsapp, contact, email, picture) VALUES ('$date', '$name_title', '$type', '$species', '$gender', '$age', '$basic_ifmt', '$other_ifmt', '$name', '$whatsapp', '$contact', '$email', '$picture')";
    if($mysqli->query($sql) === TRUE) {
        header('location: success_animal.html');
    } else {
        header('location: error_animal.html');
    }
    $conn->close();
}
?>