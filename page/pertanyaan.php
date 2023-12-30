<?php
$c = $connect;
$result = mysqli_query($c, "SELECT * FROM pertanyaan");
while ($d = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
  $hasil[] = $d;
}


?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Daftar Pertanyaan
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
          <form>
            <!-- <a href="?hal=add_pertanyaan" class="btn btn-sm btn-success"><i class="fa fa-plus"></i>
           Tambah Pertanyaan</a>  <br><br><br>-->
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">


                <!-- <table id="example1" class="table table-bordered table-striped"> -->
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Pertanyaan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>

                  <?php foreach ($hasil as $row) {
                  ?>
                    <tr>
                      <td><?php echo $row['id']; ?></td>
                      <td><?php echo $row['pertanyaan']; ?></td>
                      <td style="text-align: center;">
                        <a class='btn btn-info btn-xs' href="?hal=edit_pertanyaan&&id_pertanyaan=<?php echo $row['id'] ?>"> <i class="glyphicon glyphicon-edit"></i></a>
                      </td>
                    </tr>

                  <?php } ?>
                </tbody>

              </table>
            </div>
          </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->