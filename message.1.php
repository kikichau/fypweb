<?php 
session_start();

$mysqli = new mysqli('localhost', 'root', '', 'fypweb') or die (mysqli_error($mysqli));

if (isset($_GET['read'])) {
    $username = $_GET['read'];
    $result = $mysqli->query("SELECT * FROM message WHERE username LIKE '$username'")
    or die ($mysqli->error);
}?>

<?php
while ($row = $result->fetch_assoc()):
?>
<?php echo $row['message']; ?>
<?php endwhile; ?>