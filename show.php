<?php
    $id = $_GET['id'];

  //$con = mysqli_connect("localhost","my_user","my_password","my_db");
  $conn = mysqli_connect('localhost','root','','sms');

  $sql = "SELECT * FROM students WHERE id = $id";
  $result = mysqli_query($conn,$sql);

  $std = mysqli_fetch_assoc($result);

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="asstes/style.css">

    <title>SMS Aplication</title>
  </head>
  <body>

    <div class="smsbodycontent">
      <div class="container">
        <div class="row">
          <div class="smstop mt-50">
            <div class="col-12">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-2">
            <a href="index.php" class="btn btn-primary">  Students </a>
          </div>
          <div class="col-12">
            <div class="studentslist">
            <h2 class="text-center">Student Information</h2>
            <hr>
            <table class="table">
                <tr>
                    <th width="100" class="text-right"> Name : </th>
                    <td><?php echo $std['name'];?></td>
                </tr>
                <tr>
                    <th width="100" class="text-right"> Phone : </th>
                    <td><?php echo $std['phone'];?></td>
                </tr>
                <tr>
                    <th width="100" class="text-right"> Address : </th>
                    <td><?php echo $std['address'];?></td>
                </tr>
                <tr>
                    <th width="100" class="text-right"> Roll : </th>
                    <td><?php echo $std['roll'];?></td>
                </tr>
                <tr>
                    <th width="100" class="text-right"> Batch : </th>
                    <td><?php echo $std['batch'];?></td>
                </tr>
                <tr>
                    <th width="100" class="text-right"> Ammount: </th>
                    <td><?php echo $std['ammount'];?></td>
                </tr>
            </table>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>