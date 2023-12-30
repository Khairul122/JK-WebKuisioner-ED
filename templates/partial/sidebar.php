 <!-- sidebar: style can be found in sidebar.less -->
 <section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p>Admin</p>
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MENU</li>

    <li class="<?php if ($current_pages=='dashboar') {
      echo 'active';}?>">
      <a href="?hal=dashboar"><i class="fa fa-home"></i> <span>Home</span></a></li>

      <li class="<?php if ($current_pages=='user') {
        echo 'active';}?>">
        <a href="?hal=user"><i class="fa fa-users"></i> <span>Kelola Karyawan</span></a></li>

        <li class="<?php if ($current_pages=='dosen') {
          echo 'active';}?>">
          

          <li class="<?php if ($current_pages=='pertanyaan') {
            echo 'active';}?>">
            <a href="?hal=pertanyaan"><i class="fa fa-question-circle"></i> <span>Pertanyaan</span></a></li>

            <li class="<?php if ($current_pages=='hasil') {
              echo 'active';}?>">
              <a href="?hal=hasil"><i class="fa fa-question-circle"></i> <span>Hasil Kuisioner</span></a></li>

        <!-- <li class="treeview <?php if ($current_pages=='user' or $current_pages=='add_user') {
          echo 'active';}?>">
          <a href="#">
            <i class="fa fa-users"></i> <span>User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu <?php if ($current_pages=='user' or $current_pages=='add_user') {
            echo 'active';}?>">
            <li class="<?php if ($current_pages=='user' or $current_pages=='add_user') {
              echo 'active';}?>">
              <a href="?hal=user"><i class="fa fa-user"></i> User</a></li>
            <li class="<?php if ($current_pages=='user' or $current_pages=='add_user') {
              echo 'active';}?>">
              <a href="?hal=add_user"><i class="fa fa-user-plus"></i> Tambah User</a></li>
            </ul> -->


        <!-- <li class="treeview <?php if ($current_pages=='pertanyaan' or $current_pages=='add_pertanyaan') {
          echo 'active';}?>">
          <a href="#">
            <i class="fa  fa-question-circle"></i> <span>Pertanyaan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu <?php if ($current_pages=='pertanyaan' or $current_pages=='add_pertanyaan') {
            echo 'active';}?>">
            <li class="<?php if ($current_pages=='pertanyaan' or $current_pages=='add_pertanyaan') {
            echo 'active';}?>">
            <a href="?hal=pertanyaan"><i class="fa fa-question"></i> Pertanyaan</a></li>
            <li class="<?php if ($current_pages=='pertanyaan' or $current_pages=='add_pertanyaan') {
            echo 'active';}?>">
            <a href="?hal=add_pertanyaan"><i class="fa fa-plus"></i> Tambah Pertanyaan</a></li>
          </ul> -->

        <!-- <li class="active treeview">
          <a href="#">
            <i class="fa fa-balance-scale"></i> <span>Penilaian</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="#"><i class="fa fa-question"></i> Pertanyaan</a></li>
            <li><a href="#"><i class="fa fa-list"></i> Masukan</a></li>
          </ul>
        </li> -->
        <li><a href="logout.php"><i class="fa fa-sign-out"></i> <span>Keluar</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
