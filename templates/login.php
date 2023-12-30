<?php 


if (isset($_POST['login'])) {
  $user = $_POST['username'];
  $pass = $_POST['password'];

  $result = mysqli_query($connect, "select * from user where kode = '$user' && password = '$pass' && deleted = 0 ");

  $cocok=mysqli_num_rows($result);
  if ($cocok > 0) {
    $d = mysqli_fetch_array($result,MYSQLI_ASSOC);
    if ($d['level'] == 1) {
      $_SESSION['id'] = $d['id'];
      echo "<script>
      window.location = 'admin.php';
      </script>";
      $result = mysqli_query($connect, "insert into log(log) values('Admin Login')");
    }else{
      session_start();    
      $_SESSION['id'] = $d['id'];
      $_SESSION['kode'] = $d['kode'];
      $_SESSION['bidang'] = $d['bidang'];
      echo "<script>
      window.location = 'user.php';
      </script>";
      $result = mysqli_query($connect, "insert into log(log) values('".$_SESSION['nim']." Login')");
    }
  }else {
    echo "<script>

    window.location = 'index.php';
    </script>";
  }

  while($d = mysqli_fetch_array($result,MYSQLI_ASSOC)){
    $hasil[] = $d;
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <?php require_once 'templates/partial/head.php'; ?>
</head>
<body class="hold-transition ">
  <div class="wrapper">

    <form method="POST">
      <div class="box-body">
        <div class="row">

          <h1 align="center">Login</h1>
          <div class="col-md-4">

          </div>

          <div class="col-md-4 panel panel-body panel-info">
            <div class="form-group">
              <div class="form-group">
                <label>Username</label>
                <input  type="text" class="form-control" id="kode" name="username" placeholder="Masukkan username...">
              </div>
            </div>
            <div class="form-group">
              <div class="form-group">
                <label>password</label>
                <input  type="password" class="form-control" id="kode" name="password">
              </div>
            </div>
            <center>
              <button type="submit" name="login" class="btn btn-info">Login</button>
            </center>
          </div>


        </div>


      </div>
    </form>    


  </body>
  </html>
