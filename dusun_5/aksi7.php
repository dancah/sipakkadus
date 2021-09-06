<?php
	
	include "koneksi.php";
	include "fungsi_antiinjection.php";

	$nik = antiinjection($_POST['nik']);
	$nama = antiinjection($_POST['nama']);
	$tgl_meninggal = antiinjection($_POST['tgl_meninggal']);
	$status_kel = antiinjection($_POST['status_kel']);
	$dusun = antiinjection($_POST['dusun']);
	$alamat = antiinjection($_POST['alamat']);
	$keterangan = antiinjection($_POST['keterangan']);
	
	
	if ($_GET['mod']=='tambah') {
		$sql = $db->query("SELECT nik FROM kematian where nik='$nik'");
		$cek_id=mysqli_num_rows($sql);
	if ($cek_id > 0){
				echo "<script>alert('nik Sudah Digunakan');history.go(-1) </script>";
		}else{
		$sql = $db->query("INSERT INTO kematian (nik,nama,meninggal,status_keluarga,alamat,dusun,keterangan) 
						VALUES ('$nik', '$nama', '$tgl_meninggal','$status_kel','$alamat','$dusun','$keterangan') ");
			header('location:data_penduduk_meninggal.php');
	}}

	elseif ($_GET['mod']=='edit') {
		$sql = $db->query("UPDATE kematian SET nama='$nama', meninggal='$tgl_meninggal', status_keluarga='$status_kel',
				dusun='$dusun'  ,  keterangan='$keterangan' 
			WHERE nik ='$nik' ");
		header('location:data_penduduk_meninggal.php');
	}

	$nik = $_GET['nik'];
	if($_GET['mod']=='delete') {
			$sql1 = $db->query("DELETE FROM kematian WHERE nik ='$nik' ");
			header('location:data_penduduk_meninggal.php');
	}

?>