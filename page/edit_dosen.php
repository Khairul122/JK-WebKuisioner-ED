<?php 

if(isset($_POST['update'])) {
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $kelas = $_POST['kelas'];
  $bidang = $_POST['bidang'];

  $result = mysqli_query($connect, "update dosen set nama='$nama', kelas='$kelas' , bidang ='$bidang' where id = '$id' ");


  if ($result) {
    $log = mysqli_query($connect, "insert into log(log) values('Admin mengedit data dosen dengan id ".$id."')");
    echo "<script>
    window.location = './admin.php?hal=dosen';
    </script>";
  }else{
    echo '<script>
    window.alert("gagal");
    </script>';
  }
  // echo '<script>window.alert("hao")</script>';
  // echo $nim;
  // redirect(lgo);
} 
elseif (isset($_GET['id'])) {
  $id = $_GET['id'];
  $result = mysqli_query($connect, "select * from dosen where id = $id");
  while($d = mysqli_fetch_array($result,MYSQLI_ASSOC)){
    $hasil[] = $d;
  }
}
elseif (isset($_GET['delete_id'])) {
  $id = $_GET['delete_id'];
  $result = mysqli_query($connect, "update dosen set deleted = '1' where id = '$id'");
  if ($result) {
    $log = mysqli_query($connect, "insert into log(log) values('Admin menghapus data dosen dengan id ".$id."')");
    echo "<script>
    window.location = './admin.php?hal=dosen';
    </script>";
  }else{
    echo '<script>
    window.alert("gagal");
    </script>';
  }
}


else{
 echo '<script>window.alert("hao")</script>';
}
?>

<!-- Main content -->
<section class="content">
  <!-- SELECT2 EXAMPLE -->
  <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Dosen</h3>

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
                <input type="hidden" class="form-control" id="id" name="id" placeholder="Masukkan nama dosen..." value="<?php echo $row['id'] ?>">
                <label>Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama dosen..." value="<?php echo $row['nama'] ?>">
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
                <label>Kelas</label>
                <input type="text" class="form-control" name="kelas" placeholder="Masukkan kelas..." value="<?php echo $row['kelas'] ?>">
                <p>*jika kelas lebih dari satu pisahkan dengan tanda koma (",")</p>
                <div class="box-footer">
                  <div class="col-md-12">
                    <button type="submit" name="update" class="btn btn-block btn-primary">Simpan</button>
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
