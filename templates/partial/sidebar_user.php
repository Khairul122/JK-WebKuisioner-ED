 <!-- sidebar: style can be found in sidebar.less -->
 <section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p><?php 
      // session_start();
      if (isset($_SESSION['id'])) {
        echo $_SESSION['kode'];
      }else{
        echo "kode";
      }
      ?></p>
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MENU</li>
    <li><a href="logout.php"><i class="fa fa-sign-out"></i> <span>Keluar</span></a></li>
  </ul>
</section>
<!-- /.sidebar -->
