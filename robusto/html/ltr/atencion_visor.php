<?php
require('lib_externos/fpdf182/fpdf.php');
//header('Content-Type: text/html; charset=UTF-8');
//require_once("../../config/Cado.php");

$Condicion = $_GET["id"];
//$saludo = $_POST['saludo'];


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(40, 10, utf8_decode('¡Mi primera página pdf con FPDF! - '.$Condicion));
$pdf->Cell(90,20);
$pdf->Write(5,'A continuación mostramos una imagen ');
//$pdf->Image('../../app-assets/images/logo/dog.png' , 80 ,22, 35 , 38,'PNG', 'http://www.desarrolloweb.com');
$pdf->Output();


/*
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    //global $Condicion;
    // Logo
    //$this->Image('logo_pb.png',10,8,33);
    //$this->Image('../../app-assets/images/logo/logo_index_345-45.png',10,8,33);
    
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    //$this->Cell(30,10,utf8_decode('l'.$saludo.'-'),1,0,'C');
    $this->Cell(30,10,utf8_decode('ATENCIÓN'),1,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
*/

// Creación del objeto de la clase heredada
/*-
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
for($i=1;$i<=40;$i++)
    $pdf->Cell(0,10,utf8_decode('Imprimiendo línea número ').$i,0,1);
$pdf->Output();
?>
-*/


?>