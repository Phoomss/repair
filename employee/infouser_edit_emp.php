<!DOCTYPE html>
<html lang="en">
<?php $menu = "infouser_edit_emp"; ?>
<?php include("head.php"); ?>
<?php
include("condb.php"); // เชื่อมต่อฐานข้อมูล

$user_id = $_GET['user_id'];
// echo $id;
$qEmp = "SELECT * FROM tbl_login WHERE user_id=$user_id";
$result = mysqli_query($con, $qEmp) or die("Error in sql : $qEmp" . mysqli_error($qEmp));
$row = mysqli_fetch_array($result);
?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <?php include("navbar.php"); ?>
    <!-- /.navbar -->
    <?php include("menu.php"); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">

        </div><!-- /.container-fluid -->
      </div>

      <div class="container">
        <div class="row mt-3">
          <h1>แก้ไขข้อมูลส่วนตัว</h1>
          <hr><br>
          <div class="col-md-4">
          </div>
          <div class="container">
            <div class="col-md-12 offset-md-1">
              <form action="info_update_emp.php" method="post">
                <!-- Username -->
                <div class="form-group row">
                  <div class="col-2">
                    <label>User Name</label>
                  </div>
                  <div class="col-md-3">
                    <input type="text" class="form-control " name="username" value="<?php echo $row['username']; ?>">
                  </div>
                </div>
                <!-- Username -->
                <!-- Name -->
                <div class="form-group row">
                  <div class="col-2">
                    <label>Name</label>
                  </div>
                  <div class="col-md-3">
                    <input type="text" class="form-control " name="u_name" value="<?php echo $row['u_name']; ?>">
                  </div>
                </div>
                <!-- Name -->
                <!-- Last Name -->
                <div class="form-group row">
                  <div class="col-2">
                    <label>Last Name</label>
                  </div>
                  <div class="col-md-3">
                    <input type="text" class="form-control " name="u_lastname" value="<?php echo $row['u_lastname']; ?>">
                  </div>
                </div>
                <!-- Last Name -->
                <!-- Tel Phone -->
                <div class="form-group row">
                  <div class="col-2">
                    <label>Tel Phone</label>
                  </div>
                  <div class="col-md-3">
                    <input type="text" class="form-control " name="tel" value="<?php echo $row['tel']; ?>">
                  </div>
                </div>
                <!-- Tel Phone -->
                <!-- email -->
                <div class="form-group row">
                  <div class="col-2">
                    <label>Email</label>
                  </div>
                  <div class="col-md-3">
                    <input type="text" class="form-control " name="email" value="<?php echo $row['email']; ?>">
                  </div>
                </div>
                <!-- email -->

                <input type="button" value=" ยกเลิก " class="btn btn-danger" onclick="window.location='info_emp.php' " />
                <button type="submit" class="btn btn-success">ยืนยันการแก้ไขข้อมูล</button>

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