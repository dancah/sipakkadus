<?php
	
	include "koneksi.php";
	include "fungsi_antiinjection.php";

	$nik = antiinjection($_POST['nik']);
	$nama = antiinjection($_POST['nama']);
	$tempat_lahir = antiinjection($_POST['tempat_lahir']);
	$tgl_lahir = antiinjection($_POST['tgl_lahir']);
	$agama = antiinjection($_POST['agama']);
	$status_kel = antiinjection($_POST['status_kel']);
	$jenis = antiinjection($_POST['jenis']);
	$status_tinggal = antiinjection($_POST['status_tinggal']);
	$dusun = antiinjection($_POST['dusun']);
	$pekerjaan = antiinjection($_POST['pekerjaan']);
	$alamat = antiinjection($_POST['alamat']);
	$keterangan = antiinjection($_POST['keterangan']);
	
	
	if ($_GET['mod']=='tambah') {
		$sql = $db->query("SELECT nik FROM penduduk where nik='$nik'");
		$cek_id=mysqli_num_rows($sql);
	if ($cek_id > 0){
				echo "<script>alert('nik Sudah Digunakan');history.go(-1) </script>";
		}else{
		$sql = $db->query("INSERT INTO penduduk (nik,nama_penduduk,tempat_lahir,tgl_lahir,agama,status_kel,alamat,dusun,status_tinggal,pekerjaan,keterangan,jenis_kependudukan) 
						VALUES ('$nik', '$nama', '$tempat_lahir', '$tgl_lahir', '$agama','$status_kel','$alamat','$dusun','$status_tinggal','$pekerjaan','$keterangan','$jenis') ");
			header('location:data_penduduk_tidaktetap.php');
	}}

	elseif ($_GET['mod']=='edit') {
		$sql = $db->query("UPDATE penduduk SET nama_penduduk='$nama', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', agama='$agama',  status_kel='$status_kel',  alamat='$alamat' ,  status_tinggal='$status_tinggal' ,  
				dusun='$dusun' ,pekerjaan='$pekerjaan' ,  keterangan='$keterangan' ,  jenis_kependudukan='$jenis'  
			WHERE nik ='$nik' ");
		header('location:data_penduduk_tidaktetap.php');
	}

	$nik = $_GET['nik'];
	if($_GET['mod']=='delete') {
			$sql1 = $db->query("DELETE FROM penduduk WHERE nik ='$nik' ");
			header('location:data_penduduk_tidaktetap.php');
	}

?>