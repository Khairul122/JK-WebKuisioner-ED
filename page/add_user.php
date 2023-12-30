<?php 

if (isset($_POST['simpan'])) {
  $kode = $_POST['kode'];
  $nama = $_POST['nama'];
  $bidang = $_POST['bidang'];
  $jabatan = $_POST['jabatan'];
  $result = mysqli_query($connect, "insert into user(kode,nama,bidang,jabatan,password) values('$kode','$nama','$bidang' , '$jabatan' , '$kode')");
  if ($result) {
    $log = mysqli_query($connect, "insert into log(log) values('Admin menambahkan user dengan kode ".$kode." dari bidang ".$bidang."')");
    echo "<script>
    window.location = './admin.php?hal=user';
    </script>";
  }else{
    echo '<script>
    window.alert("gagal");
    </script>';
  }




}
?>

<!-- Main content -->
<section class="content">
  <!-- SELECT2 EXAMPLE -->
  <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">Tambah User</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
      </div>
    </div>
    <!-- /.box-header -->
    <form method="POST">
      <div class="box-body">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <div class="form-group">
                <label>Kode Karyawan</label>
                <input type="text" class="form-control" id="kode" name="kode" placeholder="Masukkan Kode...">
              </div>
              <div class="form-group">
                <label>Nama Karyawan</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama...">
              </div>
              <div class="form-group">
                <label>bidang</label>
                <select name="bidang" class="form-control">
                  <option selected disabled>-- Pilih bidang --</option>
                  <option >Lapangan</option>
                  
                </select>
              </div>

              <div class="form-group">
                <label>Jabatan</label>
                <input type="text" class="form-control" name="jabatan" placeholder="Masukkan Jabatan...">
                <div class="box-footer">
                  <div class="col-md-12">
                    <button type="submit" name="simpan" class="btn btn-block btn-primary">Simpan</button>
                  </div>

                </div>
              </div>
            </form>


          </div>

        </div>

      </div>

    </div>

  </section>
  <!-- /.box -->
