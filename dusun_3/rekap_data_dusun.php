<?php 
include "koneksi.php";
session_start();
if($_SESSION['username']== '' AND $_SESSION['dusun']=='' AND $_SESSION['dusun']!=='Tgk. Lam U'){
		header("location:index.php");
	}
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SIPAKADUS - Rekap Data</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
               <a href="dashboard.php"><img class="main-logo" width="90px" src="img/logo/logo.png" alt="" /></a>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a href="dashboard.php">
								   <span class="educate-icon educate-home icon-wrap"></span>
								   <span class="mini-click-non">Dashboard</span>
						</a>
                        </li>
                       
                        <li>
                            <a class="has-arrow" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap"></span> <span class="mini-click-non">Data Penduduk</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Data Table" href="data_penduduk_semua.php"><span class="mini-sub-pro">Semua Penduduk</span></a></li>
                                <li><a title="Data Table" href="data_penduduk_tetap.php"><span class="mini-sub-pro">Penduduk Tetap</span></a></li>
                                <li><a title="Data Table" href="data_penduduk_tidaktetap.php"><span class="mini-sub-pro">Penduduk Tidak Tetap</span></a></li>
                                <li><a title="Data Table" href="data_penduduk_lansia.php"><span class="mini-sub-pro">Penduduk Lansia</span></a></li>
                                  <li><a title="Data Table" href="data_penduduk_pindah.php"><span class="mini-sub-pro">Penduduk Pindah</span></a></li>
                                <li><a title="Data Table" href="data_penduduk_meninggal.php"><span class="mini-sub-pro">Penduduk Meninggal</span></a></li>
                         </ul>
                        </li>
                        <li >
                            <a href="tempat_usaha.php">
								   <span class="educate-icon educate-data-table icon-wrap"></span>
								   <span class="mini-click-non">Data Tempat Usaha</span>
						</a>
                        </li>
						<li >
                            <a href="rekap_data.php">
								   <span class="educate-icon educate-data-table icon-wrap"></span>
								   <span class="mini-click-non">Rekap Data</span>
						</a>
                        </li>
						<li >
                            <a href="user.php">
								   <span class="educate-icon educate-professor icon-wrap"></span>
								   <span class="mini-click-non">User</span>
						</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="dashboard.php"><img class="main-logo" width="40px" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                           
										    <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="#" class="nav-link"><h3>SIPAKADUS</h3></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-11 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<img src="img/images.png" alt="" />
															<span class="admin-name"><?php echo $_SESSION['username']; ?></span>
															<i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="logout.php"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			
			
			
			
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                 <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li>
										<a data-toggle="collapse" data-target="#Charts" href="dashboard.php">Dashboard <span class="admin-project-icon edu-icon"></span></a>
                                        </li>
                                        
                                        <li>
										<a data-toggle="collapse" data-target="#Tablesmob" href="#">Data Penduduk <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                <li><a href="data_penduduk_semua.php">Semua Penduduk</a></li>
                                                <li><a href="data_penduduk_tetap.php">Penduduk Tetap</a></li>
                                                <li><a href="data_penduduk_tidaktetap.php">Penduduk Tidak Tetap</a></li>
                                                <li><a href="data_penduduk_lansia.php">Penduduk Lansia</a></li>
                                                 <li><a href="data_penduduk_pindah.php">Penduduk Pindah</a></li>
                                                <li><a href="data_penduduk_meninggal.php">Penduduk Meninggal</a></li>
                                           </ul>
                                        </li>
										<li>
										<a data-toggle="collapse" data-target="#Charts" href="tempat_usaha.php">Data Tempat Usaha<span class="admin-project-icon edu-icon"></span></a>
                                        </li>
										<li>
										<a data-toggle="collapse" data-target="#Charts" href="rekap_data.php">Rekap Data<span class="admin-project-icon edu-icon"></span></a>
                                        </li>
										<li>
										<a data-toggle="collapse" data-target="#Charts" href="user.php">User<span class="admin-project-icon edu-icon"></span></a>
                                        </li>
                                       
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
			
			
			
			
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Rekap Data</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		<?php
		
			include "koneksi.php";
		
			$a = 'Tgk. Lam U';
			
					$sql = $db->query("SELECT nama FROM user where dusun='Keuchik'");
					$data = $sql->fetch_array();
					
					$sql1 = $db->query("SELECT * FROM penduduk where jenis_kependudukan = 'Penduduk Tetap' and dusun='$a'");
					$jumlah=mysqli_num_rows($sql1);
					
					$sql2 = $db->query("SELECT * FROM penduduk where status_kel = 'Kepala Keluarga' and dusun='$a'");
					$jumlah2=mysqli_num_rows($sql2);
																
					$sql3 = $db->query("SELECT * FROM penduduk where jenis_kependudukan = 'Penduduk Tidak Tetap' and dusun='$a'");
					$jumlah3=mysqli_num_rows($sql3);
																											
					$sql4 = $db->query("SELECT * FROM penduduk where jenis_kependudukan = 'Lansia' and dusun='$a'");
					$jumlah4=mysqli_num_rows($sql4);
					
					$sql5 = $db->query("SELECT * FROM usaha where dusun='$a'");
					$jumlah5=mysqli_num_rows($sql5);
					
					$sql6 = $db->query("SELECT nama FROM user where dusun='$a'");
					$data2 = $sql6->fetch_array();
																
																
					
		?>
					
					
					
		<div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Rekap Data Penduduk Tgk. Lam U</a></li>
                             
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    <form method='POST' action='rekapdusunpdf.php' class="dropzone dropzone-custom needsclick add-professors">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
																<label>DUSUN / JURONG</label>
                                                                       <input name="dusun" id="dusun" type="text" class="form-control" value="Tgk. Lam U" readonly required>
                                                              	</div>
																<div class="form-group">
																<label>NAMA ULEE JURONG</label>
                                                                       <input name="ulee" id="ulee" type="text" class="form-control" value="<?php echo $data2['nama'];?>" readonly required>
                                                              	</div>
                                                                <div class="form-group">
																<label>GAMPONG</label>
                                                                    <input name="gampong" id="gampong" type="text" class="form-control" value="Kota Baru" readonly required>
                                                                </div>
                                                                <div class="form-group">
																<label>KECAMATAN</label>
                                                                    <input name="kecamatan" id="kecamatan" type="text" class="form-control" value="Kuta Alam" readonly required>
                                                                </div>
																<div class="form-group">
																<label>NAMA KEUCHIK</label>
                                                                    <input name="nama" id="nama" type="text" class="form-control" value="<?php echo $data['nama'];?>" readonly required>
                                                                </div>
                                                                <div class="form-group">
																<label>TANGGAL PENDATAAN</label>
                                                                    <input name="tanggal" id="tanggal" type="date" class="form-control" placeholder="Tanggal" required>
                                                                </div>
                                                                <div class="form-group">
																<label>JUMLAH PENDUDUK TETAP</label>
																    <input name="penduduk_tetap" id="penduduk_tetap" type="text" value="<?php echo $jumlah;?>" class="form-control" readonly required>
                                                                </div>
																<div class="form-group">
																<label>JUMLAH KK</label>
																
                                                                    <input name="jumlah_kk" id="jumlah_kk" type="text" class="form-control" value="<?php echo $jumlah2;?>" readonly required>
                                                                </div>
																<div class="form-group">
																<label>JUMLAH PENDUDUK TIDAK TETAP</label>
																    <input name="penduduk_tidaktetap" id="penduduk_tidaktetap" type="text" value="<?php echo $jumlah3;?>"  class="form-control" readonly required>
                                                                </div>
																<div class="form-group">
																<label>JUMLAH LANSIA</label>
																     <input name="lansia" id="lansia" type="text" class="form-control" value="<?php echo $jumlah4;?>"  readonly required>
                                                                </div>
																<div class="form-group">
																<label>JUMLAH TEMPAT USAHA</label>
																     <input name="usaha" id="usaha" type="text" class="form-control" value="<?php echo $jumlah5;?>" readonly required>
                                                                </div>
																<div class="form-group">
																<label>JENIS TEMPAT USAHA</label>
																		<table>
																			<thead>
																				<tr>
																					<th>No</th>
																					<th>Jenis Usaha</th>
																				</tr>
																			</thead>
																			<tbody>
																			<?php 
																			
																			include "koneksi.php";
																					$no = 0;
																					$sql = $db->query("SELECT distinct(jenis_usaha) FROM usaha where dusun='Tgk. Lam U'");
																					$jumlah=mysqli_num_rows($sql);
																				 
																			
																				
																			if ($jumlah >= 1)
																			{
																				foreach($sql as $data){
																					echo "
																						<tr>
																						<td>".++$no."</td>
																						<td>".$data['jenis_usaha']."</td>
																						</tr>";
																				}
																			}else{
																				echo '<td>Tidak Ada Data</td>';
																			}
																			?>
																			  
																			</tbody>
																		</table>
                                                                </div>
                                                               
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
																<button type="submit" name="submit" class="btn btn-primary waves-effect waves-light" >Print</button>
                                                                <a href="rekap_data.php" class="btn btn-danger">Kembali</a>
																</div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		
		
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2020. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="js/morrisjs/raphael-min.js"></script>
    <script src="js/morrisjs/morris.js"></script>
    <script src="js/morrisjs/morris-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
  
</body>

</html>