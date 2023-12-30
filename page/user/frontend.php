<?php
$c = $connect;
$result = mysqli_query($c, "SELECT * FROM pertanyaan");
while ($d = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $hasil[] = $d;
}

// session_start();
$bidang = $_SESSION['bidang'];

if (isset($_POST['simpan'])) {
    $data1 = $_POST['data1'];
    $data2 = $_POST['data2'];
    $data3 = $_POST['data3'];
    $data4 = $_POST['data4'];
    $data5 = $_POST['data5'];
    $data6 = $_POST['data6'];
    $data7 = $_POST['data7'];
    $data8 = $_POST['data8'];
    $data9 = $_POST['data9'];
    $data10 = $_POST['data10'];
    $email = $_POST['email'];
    $hp = $_POST['hp'];

    $n = ($data1 + $data2 + $data3 + $data4 + $data5 + $data6 + $data7 + $data8 + $data9 + $data10) / 10;
    $nilai = floatval($n);

    $id = $_SESSION['id'];
    $result2 = mysqli_query($c, "INSERT INTO hasil(id_user,nilai,email,hp) values ('$id','$nilai','$email','$hp')");

    // Pastikan $dosen sudah didefinisikan sebelum digunakan
    $result3 = mysqli_query($connect, "insert into log(log) values('" . $_SESSION['kode'] . " memberikan penilaian terhadap dosen yang ber id " . $dosen . "')");

    if ($result2) {
        echo '<script>alert("Berita berhasil disimpan.");</script>';
        echo "<script>
        window.location = 'user.php';
        </script>";
    } else {
        echo "<script>
        window.alert('gagal');
        </script>";
    }
}
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Kuisioner</h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header"></div>
                <!-- /.box-header -->
                <form method="POST">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Masukkan Email</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email...">
                                </div>
                                <div class="form-group">
                                    <label>Masukkan No Hp</label>
                                    <input type="text" class="form-control" id="hp" name="hp" placeholder="Masukkan No Hp...">
                                </div>
                                <div class="col-md-12">
                                    <button type="button" name="simpan" class="btn btn-block btn-primary" onclick="showTable()">Isi Kuesioner</button>
                                </div>
                            </div>
                        </div>

                        <div id="tableContainer" class="table-responsive" style="display:none;">
                            <table id="" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Pertanyaan</th>
                                        <th>Jawaban</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr></tr>
                                    <?php foreach ($hasil as $row) { ?>
                                        <tr>
                                            <td><?php echo $row['pertanyaan'] ?></td>
                                            <td>
                                                <select name="data<?php echo $row['id'] ?>" class="form-control">
                                                    <option disabled selected>--Berikan Penilaian--</option>
                                                    <option value='10'>Sangat Baik</option>
                                                    <option value='9'>Baik</option>
                                                    <option value='8'>Cukup</option>
                                                    <option value='7'>Kurang Baik</option>
                                                    <option value='6'>Sangat Kurang Baik</option>
                                                </select>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <div style="padding-left: 20px; padding-bottom: 20px;">
                                <button name="simpan" type="submit" class="btn btn-info">Simpan Penilaian</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
</section>

<!-- Script JavaScript -->
<script>
    function showTable() {
        var tableContainer = document.getElementById("tableContainer");

        // Periksa apakah tabel sudah ditampilkan atau belum
        if (tableContainer.style.display === "block") {
            // Jika sudah ditampilkan, sembunyikan
            tableContainer.style.display = "none";
        } else {
            // Jika belum ditampilkan, tampilkan
            tableContainer.style.display = "block";
        }
    }
</script>
