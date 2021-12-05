<?php
$id = $_GET['id'];

$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];  
$gmail = $_POST['gmail'];
$roll = $_POST['roll'];
$batch = $_POST['batch'];
$ammount = $_POST['ammount'];

$conn = mysqli_connect( 'localhost', 'root', '', 'sms');


$sql = "UPDATE students SET name='$name', phone='$phone', address='$address', gmail='$gmail', roll='$roll', batch='$batch', ammount='$ammount' WHERE id = $id";

if ($conn->query($sql) === TRUE) {
	header("Location: index.php");
} else {
	echo "Error updating record: ";
}




