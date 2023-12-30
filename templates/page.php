<?php
# INI ADALAH FILE UNTUK KONFERSI HALAMAN YANG AKAN TAMPIL
$hlm='';
if (isset($_GET['hal'])) {
	$hlm=$_GET['hal'];
}
$current_pages=$hlm;
require './koneksi.php';

switch ($hlm) {
	case 'dashboar':
	$hlm="include 'page/dashboar.php';";

	break;
	case 'user':
	$hlm="include 'page/user.php';";
	break;
	case 'add_user':
	$hlm="include 'page/add_user.php';";
	break;
	case 'edit_user':
	$hlm="include 'page/edit_user.php';";
	break;
	case 'hapus_user':
	$hlm="include 'page/hapus.js';";
	break;
	case 'pertanyaan':
	$hlm="include 'page/pertanyaan.php';";
	break;
	case 'add_pertanyaan':
	$hlm="include 'page/add_pertanyaan.php';";
	break;
	case 'edit_pertanyaan':
	$hlm="include 'page/edit_pertanyaan.php';";
	break;
	case 'dosen':
	$hlm="include 'page/dosen.php';";
	break;
	case 'add_dosen':
	$hlm="include 'page/add_dosen.php';";
	break;
	case 'edit_dosen':
	$hlm="include 'page/edit_dosen.php';";
	break;

	case 'pengguna':
	$hlm="include 'page/user/frontend.php';";
	break;

	case 'hapus_dosen':
	$hlm="include 'page/hapus.js';";
	break;

	case 'hasil':
	$hlm="include 'page/hasil.php';";
	break;


}
$content = $hlm;
?>
