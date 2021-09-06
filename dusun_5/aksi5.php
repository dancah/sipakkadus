<?php
	
	include "koneksi.php";
	include "fungsi_antiinjection.php";

	$nik = antiinjection($_POST['nik']);
	$nama = antiinjection($_POST['nama']);
	$tempat_lahir = antiinjection($_POST['tempat_lahir']);
	$tgl_lahir = antiinjection($_POST['tgl_lahir']);
	$jenis_usaha = antiinjection($_POST['jenis_usaha']);
	$status_tempat = antiinjection($_POST['status_tempat']);
	$dusun = antiinjection($_POST['dusun']);
	$alamat_usaha = antiinjection($_POST['alamat_usaha']);
	$keterangan_ktp = antiinjection($_POST['keterangan_ktp']);
	$keterangan = antiinjection($_POST['keterangan']);
	
	
	if ($_GET['mod']=='tambah') {
		$sql = $db->query("SELECT nik FROM usaha where nik='$nik'");
		$cek_id=mysqli_num_rows($sql);
	if ($cek_id > 0){
				echo "<script>alert('nik Sudah Digunakan');history.go(-1) </script>";
		}else{
		$sql = $db->query("INSERT INTO usaha (nik,nama_penduduk,tempat_lahir,tgl_lahir,alamat_usaha,dusun,status_tmpt_usaha,jenis_usaha,ket_ktp,keterangan) 
						VALUES ('$nik', '$nama', '$tempat_lahir', '$tgl_lahir', '$alamat_usaha','$dusun','$status_tempat','$jenis_usaha','$keterangan_ktp','$keterangan') ");
			header('location:tempat_usaha.php');
	}}

	elseif ($_GET['mod']=='edit') {
		$sql = $db->query("UPDATE usaha SET nama_penduduk='$nama', tempat_lahir='$tempat_lahir',tgl_lahir='$tgl_lahir', alamat_usaha='$alamat_usaha', dusun='$dusun', status_tmpt_usaha='$status_tempat',  jenis_usaha='$jenis_usaha',  ket_ktp='$keterangan_ktp' ,  keterangan='$keterangan'
			WHERE nik ='$nik' ");
		header('location:tempat_usaha.php');
	}

	$nik = $_GET['nik'];
	if($_GET['mod']=='delete') {
			$sql1 = $db->query("DELETE FROM usaha WHERE nik ='$nik' ");
			header('location:tempat_usaha.php');
	}

?>