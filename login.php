<?php
include ('koneksi.php');
$errors=array();
// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $dusun = $_POST['dusun'];

    $sql = $db->query("SELECT * FROM user WHERE nik='$username' AND password='$password' and dusun='$dusun' ");
	$cek = mysqli_num_rows($sql);
	$_SESSION['username'] = $row['nama'];
	$_SESSION['dusun'] = $row['dusun'];
	if($cek > 0){
		session_start();
		$row = mysqli_fetch_assoc($sql);
		
		if($row['dusun']=="Keuchik"){
			
			$_SESSION['username'] = $row['nama'];
			$_SESSION['dusun'] = $row['dusun'];
			
			header("location:dashboard.php");
		
		}else if($row['dusun']=="Tgk. Dibitai"){
			
			$_SESSION['username'] = $row['nama'];
			$_SESSION['dusun'] = $row['dusun'];
			
			header("location:dusun_1/dashboard.php");
	
		}else if($row['dusun']=="Tgk. Cot Plieng"){
			
			$_SESSION['username'] = $row['nama'];
			$_SESSION['dusun'] = $row['dusun'];
			
			header("location:dusun_2/dashboard.php");
	
		}
		else if($row['dusun']=="Tgk. Lam U"){
			
			$_SESSION['username'] = $row['nama'];
			$_SESSION['dusun'] = $row['dusun'];
			
			header("location:dusun_3/dashboard.php");
	
		}
		else if($row['dusun']=="Tgk. Malikul Saleh"){
			
			$_SESSION['username'] = $row['nama'];
			$_SESSION['dusun'] = $row['dusun'];
			
			header("location:dusun_4/dashboard.php");
	
		}
		else if($row['dusun']=="Tgk. Tanoh Abee"){
			
			$_SESSION['username'] = $row['nama'];
			$_SESSION['dusun'] = $row['dusun'];
			
			header("location:dusun_5/dashboard.php");
	
		}else{
 
		 array_push($errors,"NIK atau Password Salah");

		}
    	
	
	}else{
 
		header("location:index.php");

	}	
  }
 
?>