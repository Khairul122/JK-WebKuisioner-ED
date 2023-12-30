<?php 

require './koneksi.php';

session_start();
if (isset($_SESSION['id'])) {
	$result = mysqli_query($connect, "insert into log(log) values('".$_SESSION['nim']." Logout')");
	unset($_SESSION['id']);
	unset($_SESSION['nim']);
	unset($_SESSION['kelas']);

}else{
	$result = mysqli_query($connect, "insert into log(log) values ('Admin Logout')");

}

echo "<script>
window.location = 'index.php';
</script>";


?>