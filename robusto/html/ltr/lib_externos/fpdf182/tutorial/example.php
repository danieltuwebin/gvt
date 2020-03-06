<?php
include "fpdf/fpdf.php";

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","",30);

$pdf->SetY(10);
$pdf->SetX(5);
$pdf->Cell(10,10,"Insertar Imagen en FPDF PHP");

// X
// Y
// Width / Ancho
// Height / Alto
// Type / Tipo
// Link
$pdf->Image("ssbu.jpg",60,50, 100, 70,'JPG',"http://evilnapsis.com/");

$pdf->output();


?>