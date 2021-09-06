<?php
session_start();
if($_SESSION['username']== '' AND $_SESSION['dusun']=='' AND $_SESSION['dusun']!=='Tgk. Malikul Saleh'){
		header("location:index.php");
	}
include "koneksi.php";
// Koneksi library FPDF
require('pdf/fpdf.php');
// Setting halaman PDF
$pdf = new FPDF('P','mm',array(216,356));
// Menambah halaman baru
$pdf->AddPage();
// Setting jenis font
$pdf->SetFont('Arial','B',16);
$pdf->Image('img/logo/logo.jpg',15,10,18);
$pdf->Ln(6);
$pdf->Cell(130,7,'DATA DUSUN / JURONG',0,1,'C');
$pdf->Ln(15);
// Setting spasi kebawah supaya tidak rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
	
$pdf->Cell(75,8,'DUSUN/JURONG',1,0);
$pdf->Cell(75,8,''.$_POST['dusun'].'',1,1);
$pdf->Cell(75,8,'NAMA ULEE JURONG',1,0);
$pdf->Cell(75,8,''.$_POST['ulee'].'',1,1);
$pdf->Cell(75,8,'GAMPONG',1,0);
$pdf->Cell(75,8,''.$_POST['gampong'].'',1,1);
$pdf->Cell(75,8,'KECAMATAN',1,0);
$pdf->Cell(75,8,''.$_POST['kecamatan'].'',1,1);
$pdf->Cell(75,8,'NAMA KEUCHIK',1,0);
$pdf->Cell(75,8,''.$_POST['nama'].'',1,1);
$pdf->Cell(75,8,'TANGGAL PENDATAAN',1,0);
$pdf->Cell(75,8,''.date('d-m-Y',strtotime($_POST['tanggal'])).'',1,1);
$pdf->Cell(75,8,'JUMLAH PENDUDUK TETAP',1,0);
$pdf->Cell(75,8,''.$_POST['penduduk_tetap'].' Jiwa',1,1);
$pdf->Cell(75,8,'JUMLAH KK',1,0);
$pdf->Cell(75,8,''.$_POST['jumlah_kk'].' KK',1,1);
$pdf->Cell(75,8,'JUMLAH PENDUDUK TIDAK TETAP',1,0);
$pdf->Cell(75,8,''.$_POST['penduduk_tidaktetap'].' Jiwa',1,1);
$pdf->Cell(75,8,'JUMLAH LANSIA',1,0);
$pdf->Cell(75,8,''.$_POST['lansia'].' Jiwa',1,1);
$pdf->Cell(75,8,'JUMLAH TEMPAT USAHA',1,0);
$pdf->Cell(75,8,''.$_POST['usaha'].'',1,1);
$pdf->Cell(75,8,'JENIS TEMPAT USAHA',1,0);
$no = 0;
$sql = $db->query("SELECT distinct(jenis_usaha) FROM usaha where dusun ='$_POST[dusun]'");
foreach($sql as $data){
$pdf->Cell(5,8,++$no,0,0,'L');
$pdf->Cell(70,8,$data['jenis_usaha'],0,1,'L');
$pdf->Cell(75,8,' ',0,0);
}
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',9);
$pdf->Cell(10,7,'Tertanda',0,0);
$pdf->Cell(100);
$pdf->Cell(75,7,'Banda Aceh,,,,,,,,,,,,,,,,,'.date("Y").'',0,1);
$pdf->Cell(10,7,'Ulee Jurong...........',0,0);
$pdf->Cell(100);
$pdf->Cell(75,7,'Mengetahui,',0,1);
$pdf->Cell(10,7,'Gp...........................',0,0);
$pdf->Cell(100);
$pdf->Cell(75,7,'Keuchik Gampong.............',0,1);
$pdf->Cell(110);
$pdf->Cell(75,7,'Kec.Kuta Alam',0,1);
$pdf->Ln(5);
$pdf->Cell(10,7,'(...........................)',0,0);
$pdf->Ln(6);
$pdf->Cell(110);
$pdf->Cell(75,7,'(...........................)',0,0);
$pdf->Ln(23);
$pdf->Cell(85);
$pdf->Cell(75,7,'Kec.KutaAlamB.Aceh@SeksiPemerintahanmukimdangampong@'.date("Y").'',0,0);

$pdf->Output('','Rekap Data Penduduk.pdf');
?>