<?php
$c = $connect;

// Fetch the count of records in the hasil table
$queryCount = "SELECT COUNT(*) as count FROM hasil";
$resultCount = mysqli_query($c, $queryCount);
$countData = mysqli_fetch_assoc($resultCount);
$totalData = $countData['count'];

$queryUserCount = "SELECT COUNT(*) as userCount FROM user";
$resultUserCount = mysqli_query($c, $queryUserCount);
$userCountData = mysqli_fetch_assoc($resultUserCount);
$totalUserCount = $userCountData['userCount'];

?>

<section class="content-header">
  <h1>
    Home
  </h1>

</section>

<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->

    <!-- ./col -->
    <div class="col-lg-4 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3><?php echo $totalUserCount; ?></h3>

          <p>Tambah User</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="?hal=add_user" class="small-box-footer">Klik <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <!-- ./col -->

    <div class="col-lg-4 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3><?php echo $totalData; ?></h3>

          <p>Lihat Hasil</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">Klik <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->

    <!-- ./col -->
  </div>
  <!-- /.row -->
  <!-- Main row -->

  <!-- /.row (main row) -->

</section>