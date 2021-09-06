<?php 
session_start();
if($_SESSION['username']== '' AND $_SESSION['dusun']=='' AND $_SESSION['dusun']!=='Keuchik'){
		header("location:index.php");
	}
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SIPAKADUS - Penduduk Tetap</title>
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
    <!-- x-editor CSS
		============================================ -->
    <link rel="stylesheet" href="css/editor/select2.css">
    <link rel="stylesheet" href="css/editor/datetimepicker.css">
    <link rel="stylesheet" href="css/editor/bootstrap-editable.css">
    <link rel="stylesheet" href="css/editor/x-editor-style.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
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
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="dashboard.php"><img class="main-logo" width="90px" src="img/logo/logo.png" alt="" /></a>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li>
                            <a href="dashboard.php">
								   <span class="educate-icon educate-home icon-wrap"></span>
								   <span class="mini-click-non">Dashboard</span>
						</a>
                        </li>
                       
                           <li class="active">
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
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                 
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Data Penduduk Tetap</span>
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
        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
						
						<?php 
							include "koneksi.php";

							switch(@$_GET['mod']) {
							default: 
						?>
						
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Data <span class="table-project-n">Penduduk</span> Tetap</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                   <a href="?mod=add" class="btn btn-primary">Tambah Data </a>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="no">No</th>
												<th data-field="id">NIK</th>
                                                <th data-field="nama" data-editable="true">Nama</th>
                                                <th data-field="tempat_lahir" data-editable="true">Tempat Lahir</th>
                                                <th data-field="tgl_lahir" data-editable="true">Tanggal Lahir</th>
                                                <th data-field="agama"data-editable="true" >Agama</th>
                                                <th data-field="status_kel" data-editable="true">Status Di Keluarga</th>
                                                <th data-field="alamat" data-editable="true">Alamat</th>
                                                <th data-field="status_tinggal" data-editable="true">Status T.Tinggal</th>
                                                <th data-field="pekerjaan" data-editable="true">Pekerjaan</th>
                                                <th data-field="keterangan" data-editable="true">Keterangan</th>
                                                <th data-field="tanggal_pendataan" data-editable="true">Tanggal Pendataan</th>
												<th data-field="aksi">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										
						<?php 
			            		$no = 0;
			            		$sql = $db->query("SELECT * FROM penduduk where jenis_kependudukan='Penduduk Tetap'");
			            	foreach($sql as $data){ 
			            		?>
									<tr>
									<td></td>
                                    <td><?php echo ++$no; ?></td>
									<td><?php echo $data['nik'] ?> </td>
									<td><?php echo $data['nama_penduduk'] ?> </td>
									<td><?php echo $data['tempat_lahir'] ?> </td>
									<td><?php echo date('d-m-Y',strtotime($data['tgl_lahir']));?>  </td>
									<td><?php echo $data['agama']?>  </td>
									<td><?php echo $data['status_kel']?>  </td>
									<td><?php echo $data['alamat']?>  </td>
									<td><?php echo $data['status_tinggal']?>  </td>
									<td><?php echo $data['pekerjaan']?>  </td>
									<td><?php echo $data['keterangan']?>  </td>
									<td><?php echo date('d-m-Y',strtotime($data['tanggal']));?>  </td>
									<td><a href='?mod=edit&id=<?php echo $data['nik'];?>'>
										<button data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
										<a href='aksi4.php?mod=delete&nik=<?php echo $data['nik'];?>' onClick="return confirm('Yakin akan menghapus Data?')">
										<button data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="Trash"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
									</td>
									</tr>
			              <?php } ?>
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
						
						 <?php 
							break;
							case 'add': 
						 ?>
				
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Tambah Data Penduduk tetap</a></li>
                             
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    <form method='POST' action='aksi4.php?mod=tambah' class="dropzone dropzone-custom needsclick add-professors">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="nik" id="nik" type="number" class="form-control" placeholder="NIK" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="nama" id="nama" type="text" class="form-control" placeholder="Nama Lengkap" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="tempat_lahir" id="tempat_lahir" type="text" class="form-control" placeholder="Tempat Lahir" required>
                                                                </div>
                                                                <div class="form-group">
																<label>Tanggal Lahir</label>
                                                                    <input name="tgl_lahir" id="tgl_lahir" type="date" class="form-control" placeholder="Tanggal Lahir" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="agama" id="agama"  class="form-control" required>
																			<option value="#" selected="" disabled="">Agama</option>
																			<option value="Islam">Islam</option>
																			<option value="Protestan">Protestan</option>
																			<option value="Katolik">Katolik</option>
																			<option value="Hindu">Hindu</option>
																			<option value="Buddha">Buddha</option>
																			<option value="Khonghucu">Khonghucu</option>
																		</select>
                                                                </div>
																<div class="form-group">
                                                                    <select name="status_kel" id="status_kel"  class="form-control" required>
																			<option value="#" selected="" disabled="">Status keluarga</option>
																			<option value="Kepala Keluarga">Kepala Keluarga</option>
																			<option value="Istri">Istri</option>
																			<option value="Anak">Anak</option>
																			<option value="Lainnya">Lainnya</option>
																		</select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="jenis" id="jenis" class="form-control" required>
																			<option value="Penduduk Tetap">Penduduk Tetap</option>
																		</select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="status_tinggal" id="status_tinggal" type="text" class="form-control" placeholder="Status Tempat Tinggal" required>
                                                                </div>
																<div class="form-group">
                                                                    <input name="pekerjaan" id="pekerjaan" type="text" class="form-control" placeholder="Pekerjaan" required>
                                                                </div>
																<div class="form-group">
                                                                    <input name="alamat" id="alamat" type="text" class="form-control" placeholder="Alamat" required>
                                                                </div>
																<div class="form-group">
                                                                    <select name="dusun" id="dusun"  class="form-control" required>
																		<option value="#" selected="" disabled="">Pilih Dusun</option>
																		<option value="Tgk. Dibitai">Tgk. Dibitai</option>
																		<option value="Tgk. Cot Plieng">Tgk. Cot Plieng</option>
																		<option value="Tgk. Lam U">Tgk. Lam U</option>
																		<option value="Tgk. Malikul Saleh">Tgk. Malikul Saleh</option>
																		<option value="Tgk. Tanoh Abee">Tgk. Tanoh Abee</option>
																	</select>
                                                                </div>
																<div class="form-group res-mg-t-15">
                                                                    <textarea name="keterangan" id="keterangan" placeholder="Keterangan"></textarea>
                                                                </div>
                                                               
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
																<button type="submit" name="submit" class="btn btn-primary waves-effect waves-light" onClick="return confirm ('Yakin akan Tambah Data?')">Submit</button>
                                                                <a href="data_penduduk_tetap.php" class="btn btn-danger">Kembali</a>
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
				<?php
				break;
				
				case 'edit':
					$sql = $db->query("SELECT * FROM penduduk WHERE nik ='$_GET[id]' ");
					$data = $sql->fetch_array();
					
					?>
					
					
		<div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Ubah Data Penduduk Tetap</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    <form method='POST' action='aksi4.php?mod=edit' class="dropzone dropzone-custom needsclick add-professors">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
															
                                                                    <input name="nik" id="nik" type="hidden" class="form-control" value='<?php echo $data['nik'];?>'>
                                                                
																<div class="form-group">
                                                                    <input name="nama" id="nama" type="text" class="form-control" placeholder="Nama Lengkap" value='<?php echo $data['nama_penduduk'];?>' required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="tempat_lahir" id="tempat_lahir" type="text" class="form-control" placeholder="Tempat Lahir" value='<?php echo $data['tempat_lahir'];?>' required>
                                                                </div>
                                                                <div class="form-group">
																<label>Tanggal Lahir</label>
                                                                    <input name="tgl_lahir" id="tgl_lahir" type="date" class="form-control" placeholder="Tanggal Lahir" value='<?php echo $data['tgl_lahir'];?>' required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="agama" id="agama"  class="form-control" required>
																			<option value="Islam" <?php if ($data['agama']=='Islam'){echo"SELECTED";}?>>Islam</option>
																			<option value="Protestan" <?php if ($data['agama']=='Protestan'){echo"SELECTED";}?>>Protestan</option>
																			<option value="Katolik" <?php if ($data['agama']=='Katolik'){echo"SELECTED";}?>>Katolik</option>
																			<option value="Hindu" <?php if ($data['agama']=='Hindu'){echo"SELECTED";}?>>Hindu</option>
																			<option value="Buddha" <?php if ($data['agama']=='Buddha'){echo"SELECTED";}?>>Buddha</option>
																			<option value="Khonghucu" <?php if ($data['agama']=='Khonghucu'){echo"SELECTED";}?>>Khonghucu</option>
																		</select>
                                                                </div>
																<div class="form-group">
                                                                    <select name="status_kel" id="status_kel"  class="form-control" required>
																			<option value="#" selected="" disabled="">Status keluarga</option>
																			<option value="Kepala Keluarga" <?php if ($data['status_kel']=='Kepala Keluarga'){echo"SELECTED";}?>>Kepala Keluarga</option>
																			<option value="Istri" <?php if ($data['status_kel']=='Istri'){echo"SELECTED";}?>>Istri</option>
																			<option value="Anak" <?php if ($data['status_kel']=='Anak'){echo"SELECTED";}?>>Anak</option>
																			<option value="Lainnya" <?php if ($data['status_kel']=='Lainnya'){echo"SELECTED";}?>>Lainnya</option>
																		</select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="jenis" id="jenis" class="form-control" required>
																			<option value="Penduduk Tetap" <?php if ($data['jenis_kependudukan']=='Penduduk Tetap'){echo"SELECTED";}?>>Penduduk Tetap</option>
																		</select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="status_tinggal" id="status_tinggal" type="text" class="form-control" placeholder="Status Tempat Tinggal" value='<?php echo $data['status_tinggal'];?>' required>
                                                                </div>
																<div class="form-group">
                                                                    <input name="pekerjaan" id="pekerjaan" type="text" class="form-control" placeholder="Pekerjaan" value='<?php echo $data['pekerjaan'];?>' required>
                                                                </div>
																<div class="form-group">
                                                                    <input name="alamat" id="alamat" type="text" class="form-control" placeholder="Alamat" value='<?php echo $data['alamat'];?>' required>
                                                                </div>
																<div class="form-group">
                                                                   <select name="dusun" id="dusun"  class="form-control" required>
																		<option value="#" selected="" disabled="">Pilih Dusun</option>
																		<option value="Tgk. Dibitai" <?php if ($data['dusun']=='Tgk. Dibitai'){echo"SELECTED";}?>>Tgk. Dibitai</option>
																		<option value="Tgk. Cot Plieng" <?php if ($data['dusun']=='Tgk. Cot Plieng'){echo"SELECTED";}?>>Tgk. Cot Plieng</option>
																		<option value="Tgk. Lam U" <?php if ($data['dusun']=='Tgk. Lam U'){echo"SELECTED";}?>>Tgk. Lam U</option>
																		<option value="Tgk. Malikul Saleh" <?php if ($data['dusun']=='Tgk. Malikul Saleh'){echo"SELECTED";}?>>Tgk. Malikul Saleh</option>
																		<option value="Tgk. Tanoh Abee" <?php if ($data['dusun']=='Tgk. Tanoh Abee'){echo"SELECTED";}?>>Tgk. Tanoh Abee</option>
																	</select>
                                                                </div>
																<div class="form-group res-mg-t-15">
                                                                    <textarea name="keterangan" id="keterangan" placeholder="Keterangan"><?php echo $data['keterangan'];?></textarea>
                                                                </div>
                                                               
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
																<button type="submit" name="submit" class="btn btn-primary waves-effect waves-light" onClick="return confirm ('Yakin akan Mengubah Data?')">Submit</button>
                                                                <a href="data_penduduk_tetap.php" class="btn btn-danger">Kembali</a>
																</div>
                                                            </div>
                                                        </div>
                                                    </form>
									<?php
											break;
									} ?>
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
	 <!-- Static Table End -->
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- data table JS
		============================================ -->
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
    <!--  editable JS
		============================================ -->
    <script src="js/editable/jquery.mockjax.js"></script>
    <script src="js/editable/mock-active.js"></script>
    <script src="js/editable/select2.js"></script>
    <script src="js/editable/moment.min.js"></script>
    <script src="js/editable/bootstrap-datetimepicker.js"></script>
    <script src="js/editable/bootstrap-editable.js"></script>
    <script src="js/editable/xediable-active.js"></script>
    <!-- Chart JS
		============================================ -->
    <script src="js/chart/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html>