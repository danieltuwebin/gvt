<?php
session_start();
require('lib_externos/fpdf/fpdf.php');
require_once("../config/Cado.php");

//global $Condicion;
//$Condicion = utf8_decode('Atención Nro. '.$_GET["Cond"]);



$Condicion = $_GET["Cond"];

$sql = "CALL SP_Obtener_TblAtencion_All_x_Id('$Condicion')";
$oCado = new Cado();
$rst = $oCado->ejecute_sql($sql);
$dt = mysqli_fetch_array($rst);
$Cliente_NombreCompleto = $dt['Cliente_NombreCompleto'];
$Mascota_Id = $dt['Mascota_Id'];
$Mascota_Nombre = $dt['Mascota_Nombre'];

if (strlen($Mascota_Id) == 1) {
    $C = 'M000'.$Mascota_Id;
} else if (strlen($Mascota_Id) == 2) {
    $C = 'M00'.$Mascota_Id;
} else if (strlen($Mascota_Id) == 3) {
    $C = 'M0'.$Mascota_Id;
} else {
    $C = 'M'.$Mascota_Id;
}

$Mascota_Nombre = $C.'-'.$Mascota_Nombre;

//$xx = $dt[''];
$Atencion_Fecha = $dt['Atencion_Fecha'];
$Atencion_T = $dt['Atencion_T'];
$Atencion_FC = $dt['Atencion_FC'];
$Atencion_FR = $dt['Atencion_FR'];
$Atencion_sc_Deshidratacion = $dt['Atencion_sc_Deshidratacion'];
$Atencion_sc_Mucosas = $dt['Atencion_sc_Mucosas'];
$Atencion_sc_TLLC = $dt['Atencion_sc_TLLC'];
$Atencion_sc_Vomitos = $dt['Atencion_sc_Vomitos'];
$Atencion_sc_Diarreas = $dt['Atencion_sc_Diarreas'];
$Atencion_sc_Ganglios = $dt['Atencion_sc_Ganglios'];
$Atencion_sc_Peso = $dt['Atencion_sc_Peso'];
$Atencion_Sintomas =$dt['Atencion_Sintomas'];

$Atencion_dx_Presuntivo = $dt['Atencion_dx_Presuntivo'];
$Atencion_dx_Definitivo = $dt['Atencion_dx_Definitivo'];
$Atencion_dx_Solicitado = $dt['Atencion_dx_Solicitado'];
$Atencion_tr_Descripcion = $dt['Atencion_tr_Descripcion'];
$Atencion_tr_Observacion = $dt['Atencion_tr_Observacion'];
$Atencion_tr_Precio = $dt['Atencion_tr_Precio'];

$sql = "CALL SP_Obtener_TblMascota_x_Id('$Mascota_Id')";
$oCado = new Cado();
$rst = $oCado->ejecute_sql($sql);
$dt = mysqli_fetch_array($rst);
$Mascota_IdEspecie = $dt['Mascota_IdEspecie'];

$sql = "CALL SP_Obtener_TblEspecie_x_Id('$Mascota_IdEspecie')";
$oCado = new Cado();
$rst = $oCado->ejecute_sql($sql);
$dt = mysqli_fetch_array($rst);
$Especie = $dt['Especie_Nombre'];



$dt = mysqli_fetch_array($rst);




$Cod="";
if (strlen($Condicion) == 1) {
    $Cod = 'A000'.$Condicion;
} else if (strlen($Condicion) == 2) {
    $Cod = 'A00'.$Condicion;
} else if (strlen($Condicion) == 3) {
    $Cod = 'A0'.$Condicion;
} else {
    $Cod = 'A'.$Condicion;
}

$GLOBALS['Condicion'] = utf8_decode('FICHA ATENCIÓN Nro. '.$Cod);



//$Perfil = $dt['Usuario_IdPerfilUsuario'];
//$Almacen = $dt['Usuario_IdAlmacen'];




class PDF extends FPDF
{  
    // Cabecera de pagina
    function Header()
    {
        // Logo
        //$this->Image('logo_pb.png', 10, 8, 33);
        //$this->Image('DANIEL1.jpg', 10, 8, 33);
        
        $this->Image('../../app-assets/images/logo/gavet-80x80.png', 10, 8, 33);
        //
        // Arial bold 15
        $this->SetFont('Arial', 'B', 20);
        // Movernos a la derecha
        $this->Cell(50);
        // Titulo
        $this->Cell(110, 10, $GLOBALS['Condicion'], 1, 0, 'C');
        // Salto de linea
        $this->Ln(20);
    }

    // Pie de p�gina
    function Footer()
    {
        // Posicion: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Numero de pagina
        $this->Cell(50, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }

    function SetDash($black=null, $white=null)
    {
        if($black!==null)
            $s=sprintf('[%.3F %.3F] 0 d',$black*$this->k,$white*$this->k);
        else
            $s='[] 0 d';
        $this->_out($s);
    }

}





//$Condicion = utf8_decode('Atención Nro. '.$_GET["Cond"]);

// Creaci�n del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times', '', 12);

/*
for ($i = 1; $i <= 40; $i++)
    $pdf->Cell(0, 10, 'Imprimiendo linea numero ' . $i, 0, 1);
    */
    /*
    $pdf->Ln(10);
    $pdf->SetFont('Arial','B',15);
    $pdf->Cell(50);
    $pdf->Cell(350 ,5,'Mascota',0,0);
    $pdf->Cell(5 ,5,'doki',0,0);

    $pdf->SetFont('Arial','B',15);
$pdf->Cell(71 ,5,'WET',0,0);
$pdf->Cell(59 ,5,'',0,0);
$pdf->Cell(59 ,5,'Details',0,1);
*/



$pdf->SetFont('Arial','B',15);
$pdf->Cell(50);
$pdf->Cell(30 ,5,'Propietario : ',0,0);
$pdf->Cell(5);
$pdf->Cell(59 ,5,$Cliente_NombreCompleto,0,0);
$pdf->Ln(8);

$pdf->Cell(50);
$pdf->Cell(30 ,5,'Mascota : ',0,0);
$pdf->Cell(5);
$pdf->Cell(59 ,5,$Mascota_Nombre,0,0);
$pdf->Ln(8);

$pdf->Cell(50);
$pdf->Cell(30 ,5,'Especie : ',0,0);
$pdf->Cell(5);
$pdf->Cell(59 ,5,$Especie,0,0);
$pdf->Ln(8);

$pdf->SetDash(); //restores no dash
$pdf->Line(20,55,190,55);
$pdf->Ln(4);
$pdf->SetTextColor(0,0,255);  // Establece el color del texto (en este caso es blanco)
$pdf->SetFillColor(0,255,0); // establece el color del fondo de la celda (en este caso es AZUL
$pdf->Cell(10);
$pdf->Cell(45, 7, 'Signos Clinicos', 1, 0, 'C', True);
$pdf->Ln(10);

$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(10);
$pdf->Cell(15 ,5,'Fecha : ',0,0);
$pdf->Cell(5);
$pdf->SetFont('Arial','',12);
$pdf->Cell(30 ,5,$Atencion_Fecha,0,0);
$pdf->Cell(5);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(10 ,5,utf8_decode('T° :'),0,0);
$pdf->Cell(5);
$pdf->SetFont('Arial','',12);
$pdf->Cell(15 ,5,$Atencion_T,0,0);
$pdf->Cell(5);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(10 ,5,'F.C. :',0,0);
$pdf->Cell(5);
$pdf->SetFont('Arial','',12);
$pdf->Cell(15 ,5,$Atencion_FC,0,0);
$pdf->Cell(5);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(15 ,5,'F.R. :',0,0);
$pdf->Cell(5);
$pdf->SetFont('Arial','',12);
$pdf->Cell(15 ,5,$Atencion_FR,0,0);
$pdf->Ln(6);


$pdf->SetFont('Arial','B',12);
$pdf->Cell(10);
$pdf->Cell(30 ,5,utf8_decode('Deshidratación : '),0,0);
$pdf->Cell(5);
$pdf->SetFont('Arial','',12);
$pdf->Cell(30 ,5,$Atencion_sc_Deshidratacion,0,0);
$pdf->Cell(5);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(15 ,5,utf8_decode('Mucosa : '),0,0);
$pdf->Cell(5);
$pdf->SetFont('Arial','',12);
$pdf->Cell(15 ,5,$Atencion_sc_Mucosas,0,0);
$pdf->Cell(5);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(7 ,5,utf8_decode('Tllc : '),0,0);
$pdf->Cell(5);
$pdf->SetFont('Arial','',12);
$pdf->Cell(15 ,5,$Atencion_sc_TLLC,0,0);
$pdf->Cell(5);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(15 ,5,utf8_decode('Vomitos : '),0,0);
$pdf->Cell(5);
$pdf->SetFont('Arial','',12);
$pdf->Cell(15 ,5,$Atencion_sc_Vomitos,0,0);
$pdf->Ln(6);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(10);
$pdf->Cell(17 ,5,utf8_decode('Diarreas : '),0,0);
$pdf->Cell(5);
$pdf->SetFont('Arial','',12);
$pdf->Cell(30 ,5,$Atencion_sc_Diarreas,0,0);
$pdf->Cell(15);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(18 ,5,utf8_decode('Ganglios : '),0,0);
$pdf->Cell(5);
$pdf->SetFont('Arial','',12);
$pdf->Cell(15 ,5,$Atencion_sc_Ganglios,0,0);
$pdf->Cell(5);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(8 ,5,utf8_decode('Peso : '),0,0);
$pdf->Cell(5);
$pdf->SetFont('Arial','',12);
$pdf->Cell(15 ,5,$Atencion_sc_Peso,0,0);

$pdf->Ln(6);
$pdf->SetX(20);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(8 ,5,utf8_decode('Sintomas'),0,0);
//$pdf->MultiCell(120,6,'',0, L, J);
$pdf->Ln(6);
$pdf->SetX(20);
$pdf->SetFont('Arial','',12);
$pdf->MultiCell(165,5,utf8_decode($Atencion_Sintomas),0, 'J');

$y = $pdf ->GetY();
$pdf -> SetY($y +4);

//$pdf->Ln(4);
$yd = $pdf ->GetY();
$pdf->SetDash(); //restores no dash
$pdf->Line(20,$yd ,190,$yd );
$pdf->Ln(2);
$pdf->SetFont('Arial','B',15);
$pdf->SetTextColor(0,0,255);  // Establece el color del texto (en este caso es blanco)
$pdf->SetFillColor(0,255,0); // establece el color del fondo de la celda (en este caso es AZUL
$pdf->Cell(10);
$pdf->Cell(45, 7, 'Diagnosticos', 1, 0, 'C', True);
$pdf->Ln(10);

$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(10);
$pdf->Cell(30 ,5,utf8_decode('Dx. Presuntivo  : '),0,0);
$pdf->Cell(5);
$pdf->SetFont('Arial','',12);
$pdf->Cell(30 ,5,utf8_decode($Atencion_dx_Presuntivo),0,0);
$pdf->Ln(6);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(10);
$pdf->Cell(30 ,5,utf8_decode('Dx. Definitivo  : '),0,0);
$pdf->Cell(5);
$pdf->SetFont('Arial','',12);
$pdf->Cell(30 ,5,utf8_decode($Atencion_dx_Definitivo),0,0);
$pdf->Ln(6);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(10);
$pdf->Cell(30 ,5,utf8_decode('Dx. Solicitado  : '),0,0);
$pdf->Cell(5);
$pdf->SetFont('Arial','',12);
$pdf->Cell(30 ,5,utf8_decode($Atencion_dx_Solicitado),0,0);
$pdf->Ln(3);


$pdf->Ln(4);
$yt = $pdf ->GetY();
$pdf->SetDash(); //restores no dash
$pdf->Line(20,$yt,190,$yt);
$pdf->Ln(2);
$pdf->SetFont('Arial','B',15);
$pdf->SetTextColor(0,0,255);  // Establece el color del texto (en este caso es blanco)
$pdf->SetFillColor(0,255,0); // establece el color del fondo de la celda (en este caso es AZUL
$pdf->Cell(10);
$pdf->Cell(45, 7, 'Tratamiento', 1, 0, 'C', True);
$pdf->Ln(10);


$pdf->SetTextColor(0,0,0);
$pdf->SetX(20);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(8 ,5,utf8_decode('Descripción'),0,0);
//$pdf->MultiCell(120,6,'',0, L, J);
$pdf->Ln(6);
$pdf->SetX(20);
$pdf->SetFont('Arial','',12);
$pdf->MultiCell(165,5,utf8_decode($Atencion_tr_Descripcion),0, 'J');
$pdf->Ln(4);
$pdf->SetX(20);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(8 ,5,utf8_decode('Notas adicionales'),0,0);
//$pdf->MultiCell(120,6,'',0, L, J);
$pdf->Ln(6);
$pdf->SetX(20);
$pdf->SetFont('Arial','',12);
$pdf->MultiCell(165,5,utf8_decode($Atencion_tr_Observacion),0, 'J');

$yc = $pdf ->GetY();
$pdf -> SetY($yc +10);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(10);
$pdf->Cell(30 ,5,utf8_decode('Costo Atención : '),0,0);
$pdf->Cell(5);
$pdf->SetFont('Arial','',12);
$pdf->Cell(30 ,5,'S/.' .$Atencion_tr_Precio.' Nuevos Soles',0,0);
$pdf->Ln(3);

$pdf->Output();

/*
<?php
require('dash.php');

$pdf=new PDF_Dash();
$pdf->AddPage();
$pdf->SetLineWidth(0.1);
$pdf->SetDash(5,5); //5mm on, 5mm off
$pdf->Line(20,20,190,20);
$pdf->SetLineWidth(0.5);
$pdf->Line(20,25,190,25);
$pdf->SetLineWidth(0.8);
$pdf->SetDash(4,2); //4mm on, 2mm off
$pdf->Rect(20,30,170,20);
$pdf->SetDash(); //restores no dash
$pdf->Line(20,55,190,55);
$pdf->Output();
?>
*/
?>