<?php
  //$con = mysqli_connect("localhost","my_user","my_password","my_db");
  $conn = mysqli_connect('localhost','root','','sms');

  $sql = "SELECT * FROM students";
  $result = mysqli_query($conn,$sql);

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
              <h1 class="text-center">All Students List</h1>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-2">
            <a href="index.php" class="btn btn-primary">  Students List</a>
          </div>
          <div class="col-10">
            <div class="studentslist">
                <form>
                <div class="form-group">
                    <label for="Name">Name : </label>
                    <input type="text" class="form-control"   placeholder="Name" name="name">
                </div>
                <div class="form-group">
                    <label for="Name">Phone : </label>
                    <input type="text" class="form-control"   placeholder="Phone" name="phone">
                </div>
                <div class="form-group">
                    <label for="Name">Address : </label>
                    <input type="text" class="form-control"   placeholder="Address" name="address">
                </div>
                <div class="form-group">
                    <label for="Name">Gmail : </label>
                    <input type="gmail" class="form-control"   placeholder="Gmail" name="gmail">
                </div>
                <div class="form-group">
                    <label for="Name">Roll : </label>
                    <input type="text" class="form-control"   placeholder="Roll" name="roll">
                </div>
                <div class="form-group">
                    <label for="Name">Batch : </label>
                    <input type="text" class="form-control"   placeholder="Batch" name="batch">
                </div>
                <div class="form-group">
                    <label for="Name">Ammount : </label>
                    <input type="text" class="form-control"   placeholder="Ammount" name="ammount">
                </div>
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>