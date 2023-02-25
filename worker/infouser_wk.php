<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>


<?php
include("condb.php"); // เชื่อมต่อฐานข้อมูล

$user_id = $_SESSION['user_id'];
// echo $id;
$qEmp = "SELECT * FROM tbl_login WHERE user_id=$user_id";
$result = mysqli_query($con, $qEmp) or die("Error in sql : $qEmp" . mysqli_error($qEmp));
$row = mysqli_fetch_array($result);
?>

<body>
  <div class="container">
    <div class="row mt-3">
      <h1>ข้อมูลส่วนตัว</h1>
      <hr><br>
      <div class="col-md-4">

      </div>
      <div class="container">
        <div class="col-md-12 offset-md-1">
          <form action="info_update_wk.php" method="post">
            <!-- Username -->
            <div class="form-group row">
              <div class="col-2">
                <label>User Name</label>
              </div>
              <div class="col-md-3">
                <?php echo $row['username'] ?>
              </div>
            </div>
            <!-- Username -->
            <!-- Name -->
            <div class="form-group row">
              <div class="col-2">
                <label>Name</label>
              </div>
              <div class="col-md-3">
                <?php echo $row['u_name']; ?>
              </div>
            </div>
            <!-- Name -->
            <!-- Last Name -->
            <div class="form-group row">
              <div class="col-2">
                <label>Last Name</label>
              </div>
              <div class="col-md-3">
                <?php echo $row['u_lastname']; ?>
              </div>
            </div>
            <!-- Last Name -->
            <!-- Tel Phone -->
            <div class="form-group row">
              <div class="col-2">
                <label>Tel Phone</label>
              </div>
              <div class="col-md-3">
                <?php echo $row['tel']; ?>
              </div>
            </div>
            <!-- Tel Phone -->
            <!-- email -->
            <div class="form-group row">
              <div class="col-2">
                <label>Email</label>
              </div>
              <div class="col-md-3">
                <?php echo $row['email']; ?>
              </div>
            </div>
            <!-- email -->
            <a class="btn btn-warning" href='infouser_edit_wk.php?user_id=<?php echo $row['user_id']; ?>'>
              แก้ไขข้อมูลส่วนตัว
            </a>
        </div>
        </form>
      </div>
    </div>


  </div>
  </div>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>



</body>

</html>