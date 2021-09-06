<?php
	
	include "koneksi.php";
	include "fungsi_antiinjection.php";
	$nama = antiinjection($_POST['nama']);
	$gampong = antiinjection($_POST['gampong']);
	$dusun = antiinjection($_POST['dusun']);
	$nik = antiinjection($_POST['nik']);
	$password = antiinjection($_POST['password']);
	$password1 = antiinjection($_POST['password1']);
	
	
	if ($_GET['mod']=='tambah') {
	$sql = $db->query("SELECT nik FROM user where nik='$nik'");
		$cek_id=mysqli_num_rows($sql);
		$sql2 = $db->query("SELECT dusun FROM user where dusun='$dusun'");
		$cek_id2=mysqli_num_rows($sql2);
	if ($cek_id > 0){
				echo "<script>alert('nik Sudah Digunakan');history.go(-1) </script>";
		}
	elseif ($cek_id2 > 0){
				echo "<script>alert('Kepala Dusun Sudah Ada');history.go(-1) </script>";
		}else{
		$sql = $db->query("INSERT INTO user (nik,nama,gampong,dusun,password) 
						VALUES ('$nik','$nama', '$gampong', '$dusun','$password') ");
			header('location:user.php');
	}}

	elseif ($_GET['mod']=='edit') {
		$sql = $db->query("UPDATE user SET nama='$nama', gampong='$gampong',dusun='$dusun', password='$password'
			WHERE nik ='$nik' ");
		header('location:user.php');
	}elseif ($_GET['mod']=='reset') {
		$sql = $db->query("UPDATE user SET password='$password1' WHERE nik ='$nik' ");
		header('location:user.php');
	}

	$nik = $_GET['id'];
	if($_GET['mod']=='delete') {
			$sql1 = $db->query("DELETE FROM user WHERE nik ='$nik' ");
			header('location:user.php');
	}

?>