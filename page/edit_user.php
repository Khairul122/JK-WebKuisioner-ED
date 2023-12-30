<?php
if(isset($_POST['update'])) {
  $id = $_POST['id'];
  $kode = $_POST['kode'];
  $jabatan = $_POST['jabatan'];
  $bidang = $_POST['bidang'];

  $result = mysqli_query($connect, "update user set jabatan='$jabatan' , bidang ='$bidang' where id = '$id' ");

  if ($result) {
    $result3 = mysqli_query($connect, "insert into log(log) values('Admin mengedit data user dengan id ".$id." ')");
    echo "<script>
    window.location = './admin.php?hal=user';
    </script>";
  }else{
    echo '<script>
    window.alert("gagal");
    </script>';
  }

} 
elseif (isset($_GET['id_user'])) {
  $id = $_GET['id_user'];
  $result = mysqli_query($connect, "select * from user where id = $id");
  while($d = mysqli_fetch_array($result,MYSQLI_ASSOC)){
    $hasil[] = $d;
  }
}
elseif (isset($_GET['delete_id'])) {
  $id = $_GET['delete_id'];
  $result = mysqli_query($connect, "update user set deleted = '1' where id = '$id'");
  $result3 = mysqli_query($connect, "insert into log(log) values('Admin menghapus user dengan id ".$id."')");
  if ($result) {
    echo "<script>
    window.location = './admin.php?hal=user';
    </script>";
  }else{
    echo '<script>
    window.alert("gagal");
    </script>';
  }
}


else{
 echo "<script>
 window.location = './admin.php?hal=user';
 </script>";
}





?>

<!-- Main content -->
<section class="content">
 <!-- SELECT2 EXAMPLE -->
 <div class="box box-default">
   <div class="box-header with-border">
     <h3 class="box-title">Edit User</h3>

     <div class="box-tools pull-right">
       <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
       <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
     </div>
   </div>
   <!-- /.box-header -->
   <?php foreach ($hasil as $row) { ?>
   <form method="POST">
    <div class="box-body">
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <div class="form-group">
              <label>Kode Karyawan</label>
              <input readonly type="text" class="form-control" id="kode" name="kode" placeholder="Masukkan Kode Karyawan..." value="<?php echo $row['kode'] ?>">
              <input  type="hidden" class="form-control" id="id" name="id" placeholder="Masukkan Kode Karyawan..." value="<?php echo $row['id'] ?>">
            </div>
            <div class="form-group">
              <label>bidang</label>
              <select name="bidang" class="form-control">
                <option selected><?php echo $row['bidang']; ?></option>
                <option >Akuntansi</option>
                <option >Elektro</option>
                <option >Farmasi</option>
                <option >Kebidanan</option>
                <option >Teknik Informatika</option>
                <option >Teknik Komputer</option>
                <option >Teknik Mesin</option>
              </select>
            </div>

            <div class="form-group">
              <label>Jabatan</label>
              <input type="text" class="form-control" name="jabatan" placeholder="Masukkan Jabatan..." value="<?php echo $row['jabatan'] ?>">
              <div class="box-footer">
                <div class="col-md-12">
                  <button type="submit" name="update" class="btn btn-block btn-primary" >Simpan</button>
                </div>

              </div>
            </div>
          </form>
          <?php } ?>

        </div>

      </div>

    </div>

  </div>

</section>
<!-- /.box -->
