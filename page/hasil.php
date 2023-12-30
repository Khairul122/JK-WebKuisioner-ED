<?php
$c = $connect;

// Modify your query to fetch all results from both tables
$query = "SELECT hasil.*, user.nama, user.bidang, user.jabatan FROM hasil
          JOIN user ON hasil.id_user = user.id";
$result = mysqli_query($c, $query);

// Fetch the results into an array
$hasil = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Data Hasil Kuisioner
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">

        </div>
        <!-- /.box-header -->
        <div class="box-body">

        </div>
        <!-- <form> -->
        <div class="table-responsive">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Karyawan</th>
                <th>Bidang</th>
                <th>Jabatan</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Nilai</th>
              </tr>
            </thead>
            <tbody>

              <?php
              $counter = 1;
              foreach ($hasil as $row) {  ?>
                <tr>
                  <td><?php echo $counter++; ?></td>
                  <td><?php echo $row['nama'] ?></td>
                  <td><?php echo $row['bidang'] ?></td>
                  <td><?php echo $row['jabatan'] ?></td>
                  <td><?php echo $row['email'] ?></td>
                  <td><?php echo $row['hp'] ?></td>
                  <td style="text-align: center;">
                    <?php
                    if ($row['nilai'] > 5 && $row['nilai'] <= 10) {
                      echo "Tidak Stress";
                    } elseif ($row['nilai'] > 1 && $row['nilai'] <= 4) {
                      echo "Stress";
                    } else {
                      echo "N/A";
                    }
                    ?>

                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <!-- </form> -->

        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->