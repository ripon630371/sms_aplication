<?php
    $id = $_GET['id'];

  //$con = mysqli_connect("localhost","my_user","my_password","my_db");
  $conn = mysqli_connect('localhost','root','','sms');

  $sql = "DELETE FROM students WHERE id = $id";
  $result = mysqli_query($conn,$sql);

  if($result){
      header("Location: index.php");
  }else{
      echo "Not Delete";
  }


?>