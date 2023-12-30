<?php
if(isset($_POST['simpan'])) {
  $id = $_POST['id'];
  $pertanyaan = $_POST['pertanyaan'];
  $result = mysqli_query($connect, "update pertanyaan set pertanyaan='$pertanyaan' where id = '$id' ");

  if ($result) {
    echo "<script>
    window.location = './admin.php?hal=pertanyaan';
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
elseif (isset($_GET['id_pertanyaan'])) {
  $id = $_GET['id_pertanyaan'];
  $result = mysqli_query($connect, "select * from pertanyaan where id = $id");
  while($d = mysqli_fetch_array($result,MYSQLI_ASSOC)){
    $hasil[] = $d;
  }
}


else{
 echo "<script>
 window.location = './admin.php?hal=pertanyaan';
 </script>";
}

?>
<!-- Main content -->
<section class="content container-fluid">
  <div class="col-md-12">
   <div class="box box-info">
     <div class="box-header with-border">
       <h3 class="box-title">Pertanyaan</h3>

       <div class="box-tools pull-right">
         <button type="submit" name="update" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
         </button>
         <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
       </div>
     </div>
     <?php foreach ($hasil as $row) { ?>
     <form method="POST">
       <div class="box-body">
        <div class="form-group">
         <label class="col-sm-3 control-label">Ubah Pertanyaan</label>
         <div class="col-sm-9">
           <input type="hidden" name="id" value="<?php echo $row['id'] ?>" class="form-control" placeholder="Isikan pertanyaan">
           <input type="text" name="pertanyaan" value="<?php echo $row['pertanyaan'] ?>" class="form-control" placeholder="Isikan pertanyaan">

         </div>

       </div> <br>

       <div class="form-group">
         <div class="col-sm-offset-3 col-sm-6">
           <button type="submit" name="simpan" class="btn btn-sm btn-primary">
           Simpan Pertanyaan</button>

           <!-- /.box-body -->
         </div>
         <!-- /.box-footer-->
       </div>
     </form>
     <?php } ?>
     <!-- /.box -->
   </div>
 </section>
 <!-- /.content -->
