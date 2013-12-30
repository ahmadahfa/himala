<?php
require('fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
	// Logo
	$this->Image('logo.jpg',10,6,30);	
	$this->Image('logo.jpg',400,50,30);	
	// Arial bold 15
	$this->SetFont('Arial','B',15);	
	// Move to the right
	$this->Cell(80);
	// Title
	$this->Cell(10,3,'KARTU PESERTA TRY OUT NUSANTARA',0,1,'C');
	// Line break

	$this->Ln(5);
	$this->Cell(80);
	$this->Cell(10,3,'SIMAK UI 2014',0,1,'C');
	$this->Ln(20);
	$this->Line(100,100,600,100);
}

// Page footer
function Footer()
{
	// Position at 1.5 cm from bottom
	$this->SetY(-15);
	// Arial italic 8
	$this->SetFont('Arial','I',8);
	// Page number
	$this->Cell(0,10,"Himpunan Mahasiswa Lamongan - Universitas Indonesia",0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->Cell(0, 10,"Nama Lengkap		: Zivana Letisa Siregar",0,1);
$pdf->Cell(0, 10,"Alamat						: Demangan Regency Blok B, Lamongan",0,1);
$pdf->Cell(0, 10,"Email 						: ziva@gmail.com",0,1);
$pdf->Cell(0, 10,"No. Telepon/HP				: 09876543222",0,1);
$pdf->Cell(0, 10,"Jenis Kelamin					: Laki-Laki",0,1);
$pdf->Cell(0, 10,"Kelompok Ujian			: IPA",0,1);
$pdf->Cell(0, 10,"Asal Sekolah						: SMA Negeri 2 Lamongan",0,1);

$pdf->Output();
?>
