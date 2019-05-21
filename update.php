<?php
session_start();

$mysqli = new mysqli('localhost', 'root', '', 'fypweb') or die (mysqli_error($mysqli));
$id = 0;

if (isset($_POST['update'])) {
  $id = $_POST['id'];
  $date = $_POST['date'];
  $name_title = $_POST['name_title'];
  $type = $_POST['type'];
  $species = $_POST['species'];
  $gender = $_POST['gender'];
  $age = $_POST['age'];
  $basic_ifmt = $_POST['basic_ifmt'];
  $other_ifmt = $_POST['other_ifmt'];
  $username = $_POST['username'];
  $name = $_POST['name'];
  $whatsapp = $_POST['whatsapp'];
  $contact = $_POST['contact'];
  $email = $_POST['email'];

  $mysqli->query("UPDATE animals SET date='$date', name_title='$name_title', type='$type', species='$species', gender='$gender', age='$age', basic_ifmt='$basic_ifmt', other_ifmt='$other_ifmt', username='$username', name='$name', whatsapp='$whatsapp', contact='$contact', email='$email' WHERE id=$id ") or die ($mysqli->error);
  header('location: your_animals.php?read=<?php echo $username; ?>');
}
?>