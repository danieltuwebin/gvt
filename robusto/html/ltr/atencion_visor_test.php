<?
//require('../librerias/fpdf/fpdf.php');
require('lib_externos/fpdf182/fpdf.php');

//$Condicion = $_GET["Cond"];
//global $Condicion = $_GET["Cond"];

class PDF extends FPDF
{
//Cabecera de página
function Header()
{

$Condicion = utf8_decode('Atención Nro. '.$_GET["Cond"]);
//Logo
//$this->Image("../../app-assets/images/logo/dog.png" , 10 ,8, 35 , 38 , "png" );
//$this->Image('dog.png',10,8,33);
//$this->Image('http://chart.googleapis.com/chart?cht=p3&chd=t:60,40&chs=250x100&chl=Hello|World',60,30,90,0,'PNG');
//Arial bold 15
$this->SetFont('Arial','B',15);
//Movernos a la derecha
$this->Cell(80);
//Título
$this->Cell(60,10,$Condicion,1,0,'C');
//$this->Cell(60,10,'Titulo del archivo' + utf8_decode('¡Mi primera página pdf con FPDF! - '.$Condicion,1,0,'C');
//Salto de línea
$this->Ln(20);
   
}

//Pie de página
function Footer()
{
//Posición: a 1,5 cm del final
$this->SetY(-15);
//Arial italic 8
$this->SetFont('Arial','I',8);
//Número de página
$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

//Creación del objeto de la clase heredada
$pdf=new PDF();
$pdf->AliasNbPages();
//Primera página
$pdf->AddPage();
$pdf->SetFont('Arial','',15);
$pdf->Link(10,8,10,10,"http://www.recetasparatodos.com.es");
$pdf->Output();
?>