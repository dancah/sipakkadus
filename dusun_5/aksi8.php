<?php
	
	include "koneksi.php";
	include "fungsi_antiinjection.php";

	$nik = antiinjection($_POST['nik']);
	$nama = antiinjection($_POST['nama']);
	$tgl_pindah = antiinjection($_POST['tgl_pindah']);
	$status_kel = antiinjection($_POST['status_kel']);
	$dusun = antiinjection($_POST['dusun']);
	$alamat = antiinjection($_POST['alamat']);
	$keterangan = antiinjection($_POST['keterangan']);
	
	
	if ($_GET['mod']=='tambah') {
		$sql = $db->query("SELECT nik FROM pindah where nik='$nik'");
		$cek_id=mysqli_num_rows($sql);
	if ($cek_id > 0){
				echo "<script>alert('nik Sudah Digunakan');history.go(-1) </script>";
		}else{
		$sql = $db->query("INSERT INTO pindah (nik,nama,pindah,status_keluarga,alamat,dusun,keterangan) 
						VALUES ('$nik', '$nama', '$tgl_pindah','$status_kel','$alamat','$dusun','$keterangan') ");
			header('location:data_penduduk_pindah.php');
	}}

	elseif ($_GET['mod']=='edit') {
		$sql = $db->query("UPDATE pindah SET nama='$nama', pindah='$tgl_pindah', status_keluarga='$status_kel',
				dusun='$dusun'  ,  keterangan='$keterangan' 
			WHERE nik ='$nik' ");
		header('location:data_penduduk_pindah.php');
	}

	$nik = $_GET['nik'];
	if($_GET['mod']=='delete') {
			$sql1 = $db->query("DELETE FROM pindah WHERE nik ='$nik' ");
			header('location:data_penduduk_pindah.php');
	}

?>