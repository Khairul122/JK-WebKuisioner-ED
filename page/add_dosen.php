<?php 

if (isset($_POST['simpan'])) {
  // $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $bidang = $_POST['bidang'];
  $kelas = $_POST['kelas'];
  $result = mysqli_query($connect, "insert into dosen(nama,bidang,kelas) values('$nama','$bidang' , '$kelas')");
  if ($result) {
    echo "<script>
    window.location = './admin.php??hal=dosen';
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
      <h3 class="box-title">Tambah Dosen</h3>

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
                <label>Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama dosen...">
              </div>
              <div class="form-group">
                <label>bidang</label>
                <select name="bidang" class="form-control">
                  <option selected disabled>-- Pilih bidang --</option>
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
                <input type="text" class="form-control" name="kelas" placeholder="Masukkan kelas...">
                <p>*jika kelas lebih dari satu pisahkan dengan tanda koma (",")</p>
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
