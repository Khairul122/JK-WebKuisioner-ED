<!DOCTYPE html>
<html>
<head>
<?php require_once 'templates/partial/head.php'; ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <?php require_once 'templates/partial/header.php'; ?>

  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- Left Sidebar Menu -->
   <?php require_once 'templates/partial/sidebar.php'; ?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <?php
      eval($content);
      #TAMPILKAN HALAMAN TERPILIH
    ?>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php require_once 'templates/partial/footer.php'; ?>
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<?php require_once 'templates/partial/script.php'; ?>
</body>
</html>
