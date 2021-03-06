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
              <h1 class="text-center">SMS Aplication</h1></br>
              <?php if(isset($_GET['success'])) { ?>
              <div class="alert alert-success" role="alert">
                This is a success alert—check it out!
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-2">
            <a href="insert.php" class="btn btn-info"> New Students</a>
          </div>
          <div class="col-10">
            <div class="stu-table">
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">SL No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Gmail</th>
                    <th scope="col">Roll</th>
                    <th scope="col">Batch</th>
                    <th scope="col">Advance</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php while($row = mysqli_fetch_assoc($result)){ ?>
                  <tr>
                    <th scope="row"><?php echo $row['id']; ?></th>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['gmail']; ?></td>
                    <td><?php echo $row['roll']; ?></td>
                    <td><?php echo $row['batch']; ?></td>
                    <td><?php echo $row['ammount']; ?></td>
                    <td>
                      <a href="show.php?id=<?php echo $row['id']; ?>" class="btn btn-info">View</a>
                      <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a>
                      <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure delete me!'); " class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>