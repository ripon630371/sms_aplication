<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$gmail = $_POST['gmail'];
$roll = $_POST['roll'];
$batch = $_POST['batch'];
$ammount = $_POST['ammount'];

$conn = mysqli_connect( 'localhost', 'root', '', 'sms');
$sql = "INSERT INTO students VALUES (Null,'$name','$phone','$address','$gmail','$roll','$batch','$ammount')";

if(mysqli_query($conn,$sql)){
    header("Location: index.php?success=1");
}else{
    header("Location: insert.php?error=1");
}