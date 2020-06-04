<?php
session_start();
require('lib_externos/fpdf/fpdf.php');
require_once("../config/Cado.php");

$Condicion = $_GET["Cond"];

$sql = "CALL SP_Obtener_TblEvaluacionMedica_Reporte_x_IdBanio('$Condicion')";
$oCado = new Cado();
$rst = $oCado->ejecute_sql($sql);
$dt = mysqli_fetch_array($rst);

$IdEvaluacionMedica = $dt['EvaluacionMedica_Id'];
$CodigoEvaluacionMedica = "";
if (strlen($IdEvaluacionMedica) == 1) {
    $E = 'EI000'.$IdEvaluacionMedica;
} else if (strlen($IdEvaluacionMedica) == 2) {
    $E = 'EI00'.$IdEvaluacionMedica;
} else if (strlen($IdEvaluacionMedica) == 3) {
    $E = 'EI0'.$IdEvaluacionMedica;
} else {
    $E = 'EI'.$IdEvaluacionMedica;
}
$CodigoEvaluacionMedica = $E;

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

$ClienteNombre = $dt['Cliente_Nombre'].' '.$dt['Cliente_Apellido'];
$Fecha = date('d-m-Y', strtotime($dt['Banio_Fecha']));
$Especialista = $dt['Usuario_NombreCompleto'];
$Em = $dt['EvaluacionMedica_Ev'];
$Em_Pulgas = $dt['EvaluacionMedica_Ecto_Pulgas'];
$Em_Piojos = $dt['EvaluacionMedica_Ecto_Piojos'];
$Em_Garrapatas = $dt['EvaluacionMedica_Ecto_garrapatas'];
$Em_Gusanos = $dt['EvaluacionMedica_Ecto_gusanos'];
$Em_Observacion = $dt['EvaluacionMedica_Ecto_observacion'];
$Em_vf_ojos = $dt['EvaluacionMedica_Vf_ojos'];
$Em_vf_nariz = $dt['EvaluacionMedica_Vf_nariz'];
$Em_vf_cavidad = $dt['EvaluacionMedica_Vf_cavidad'];
$Em_vf_dientes = $dt['EvaluacionMedica_Vf_dientes'];
$Em_vf_piel = $dt['EvaluacionMedica_Vf_piel'];
$Em_vf_cojinetes = $dt['EvaluacionMedica_Vf_cojinetes'];
$Em_vf_unias = $dt['EvaluacionMedica_Vf_unias'];
$Em_vf_oidos = $dt['EvaluacionMedica_Vf_oidos'];
$Em_vf_arias = $dt['EvaluacionMedica_Vf_arias'];
$Em_vf_glandulas = $dt['EvaluacionMedica_Vf_glandulas'];
$Em_vf_extremidades = $dt['EvaluacionMedica_Vf_extremidades'];
$Em_nh_estado = $dt['EvaluacionMedica_nh_estado'];
$Em_nh_pelaje = $dt['EvaluacionMedica_nh_pelaje'];
$Em_nh_sedante = $dt['EvaluacionMedica_nh_sedante'];
$Em_nh_puntaje = $dt['EvaluacionMedica_nh_puntaje'];
$Em_nh_recomendacion = $dt['EvaluacionMedica_nh_recomendacion'];


$GLOBALS['Condicion'] = utf8_decode('EVALUACION INTEGRAL Nro. '.$CodigoEvaluacionMedica);

class PDF extends FPDF
{  
    // Cabecera de pagina
    function Header()
    {
        // Logo
        //$this->Image('logo_pb.png', 10, 8, 33);
        //$this->Image('DANIEL1.jpg', 10, 8, 33);
        
        //$this->Image('../../app-assets/images/logo/gavet-80x80.png', 10, 8, 33);
        $this->Image('../../app-assets/images/logo/logo_index_345-45.png', 50, 10, 100);

        $this->Ln(25);
        // Titulo
        $this->Cell(45);
        $this->SetFont('Arial', 'BU', 10);        
        $this->Cell(95, 10, $GLOBALS['Condicion'], 0, 0, 'C');        
        
        //
        // Arial bold 15
        //$this->SetFont('Arial', 'B', 20);
        // Movernos a la derecha
        //----------------$this->Cell(50);
        // Titulo
        //----------------$this->Cell(110, 10, $GLOBALS['Condicion'], 1, 0, 'C');
        // Salto de linea
        //----------------$this->Ln(20);
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

// Creaci�n del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times', '', 12);

$pdf->Ln(12);
$pdf->SetFont('Arial','B',10);
$pdf->SetTextColor(0,0,255);  // Establece el color del texto (en este caso es blanco)
$pdf->SetFillColor(0,255,0); // establece el color del fondo de la celda (en este caso es AZUL
$pdf->Cell(60 ,6,utf8_decode('NECESITA EVALUACIÓN MÉDICA'),1,0,'L',true);
$pdf->Cell(10 ,6,utf8_decode($Em),1,0,'C',true); 

$pdf->Ln(8);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(30 ,5,'PACIENTE',0,0);
$pdf->Cell(5);
$pdf->SetFont('Arial','',9);
$pdf->Cell(40 ,5,': '.$Mascota_Nombre,0,0);

$pdf->Ln(5);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(30 ,5,'PROPIETARIO',0,0);
$pdf->Cell(5);
$pdf->SetFont('Arial','',9);
$pdf->Cell(60 ,5,': '.$ClienteNombre,0,0);

$pdf->Ln(5);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(30 ,5,'FECHA',0,0);
$pdf->Cell(5);
$pdf->SetFont('Arial','',9);
$pdf->Cell(20 ,5,': '.$Fecha,0,0);

$pdf->Ln(5);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(30 ,5,'ESPECIALISTA',0,0);
$pdf->Cell(5);
$pdf->SetFont('Arial','',9);
$pdf->Cell(20 ,5,': '.$Especialista,0,0);

$pdf->Ln(9);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(30 ,5,'> ECTOPARASITOS',0,0);
$y = $pdf->GetY();
$pdf->SetDash(); //restores no dash
$pdf->Line(10,$y+5 ,185,$y+5 ); 


$x1=0;
$y1=0;
$x2=0;
$y2=0; 

$pdf->Ln(7);
$pdf->Cell(20);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(15 ,5,'PULGAS',0,0);
$pdf->SetFont('Arial','',9);
if($Em_Pulgas=='SI'){    
    $pdf->Cell(5 ,5,'X',1,0,'C');
}else{
    $pdf->Cell(5 ,5,'',1,0,'C');
}

$pdf->Cell(10);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(15 ,5,'PIOJOS',0,0);
$pdf->SetFont('Arial','',9);
if($Em_Piojos=='SI'){    
    $pdf->Cell(5 ,5,'X',1,0,'C');
}else{
    $pdf->Cell(5 ,5,'',1,0,'C');
}

$pdf->Cell(10);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(25 ,5,'GARRAPATAS',0,0);
$pdf->SetFont('Arial','',9);
if($Em_Garrapatas=='SI'){    
    $pdf->Cell(5 ,5,'X',1,0,'C');
}else{
    $pdf->Cell(5 ,5,'',1,0,'C');
}

$pdf->Cell(15);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(18 ,5,'GUSANOS',0,0);
$pdf->SetFont('Arial','',9);
if($Em_Gusanos=='SI'){    
    $pdf->Cell(5 ,5,'X',1,0,'C');
}else{
    $pdf->Cell(5 ,5,'',1,0,'C');
}

$pdf->Ln(9);
$pdf->SetX(15);
$pdf->SetFont('Arial','',9);
$pdf->MultiCell(165,5,utf8_decode($Em_Observacion),1, 'J');
$x2 = $pdf->GetX();
$y2 = $pdf->GetY(); 

$pdf->Line(10,$y2+2 ,185,$y2+2 ); // LINEA HORIZONTAL
$pdf->Line(10,$y+5 ,10,$y2+2 );   // LINEA VERTICAL
$pdf->Line(185,$y+5 ,185,$y2+2 ); // LINEA VERTICAL

//*************************************************  VALORACIÓN FISICA  */
$pdf->Ln(9);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(30 ,5,utf8_decode('> VALORACIÓN FISICA'),0,0);
$y = $pdf->GetY();
$pdf->SetDash(); //restores no dash
$pdf->Line(10,$y+5 ,185,$y+5 ); 

$pdf->Ln(5);
$pdf->Cell(70);
$pdf->SetFont('Arial','',9);
$pdf->Cell(15 ,5,'NORMAL',0,0);
$pdf->Cell(40);
$pdf->Cell(15 ,5,'ANORMAL',0,0);

$pdf->Ln(5);
$pdf->Cell(5);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(15 ,5,'OJOS',0,0);
$pdf->Cell(55);
$pdf->SetFont('Arial','B',8);
if($Em_vf_ojos=='NORMAL'){    
    $pdf->Cell(5 ,5,'X',1,0,'C');
}else{
    $pdf->Cell(5 ,5,'',1,0,'C');
}
$pdf->Cell(52);
if($Em_vf_ojos=='ANORMAL'){    
    $pdf->Cell(5 ,5,'X',1,0,'C');
}else{
    $pdf->Cell(5 ,5,'',1,0,'C');
}

$pdf->Ln(6);
$pdf->Cell(5);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(15 ,5,'NARIZ',0,0);
$pdf->Cell(55);
$pdf->SetFont('Arial','B',8);
if($Em_vf_nariz=='NORMAL'){    
    $pdf->Cell(5 ,5,'X',1,0,'C');
}else{
    $pdf->Cell(5 ,5,'',1,0,'C');
}
$pdf->Cell(52);
if($Em_vf_nariz=='ANORMAL'){    
    $pdf->Cell(5 ,5,'X',1,0,'C');
}else{
    $pdf->Cell(5 ,5,'',1,0,'C');
}

$pdf->Ln(6);
$pdf->Cell(5);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(15 ,5,'CAVIDAD BUCAL',0,0);
$pdf->Cell(55);
$pdf->SetFont('Arial','B',8);
if($Em_vf_cavidad=='NORMAL'){    
    $pdf->Cell(5 ,5,'X',1,0,'C');
}else{
    $pdf->Cell(5 ,5,'',1,0,'C');
}
$pdf->Cell(52);
if($Em_vf_cavidad=='ANORMAL'){    
    $pdf->Cell(5 ,5,'X',1,0,'C');
}else{
    $pdf->Cell(5 ,5,'',1,0,'C');
}

$pdf->Ln(6);
$pdf->Cell(5);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(15 ,5,'DIENTES',0,0);
$pdf->Cell(55);
$pdf->SetFont('Arial','B',8);
if($Em_vf_dientes=='NORMAL'){    
    $pdf->Cell(5 ,5,'X',1,0,'C');
}else{
    $pdf->Cell(5 ,5,'',1,0,'C');
}
$pdf->Cell(52);
if($Em_vf_dientes=='ANORMAL'){    
    $pdf->Cell(5 ,5,'X',1,0,'C');
}else{
    $pdf->Cell(5 ,5,'',1,0,'C');
}

$pdf->Ln(6);
$pdf->Cell(5);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(15 ,5,'PIEL Y PELAJE',0,0);
$pdf->Cell(55);
$pdf->SetFont('Arial','B',8);
if($Em_vf_piel=='NORMAL'){    
    $pdf->Cell(5 ,5,'X',1,0,'C');
}else{
    $pdf->Cell(5 ,5,'',1,0,'C');
}
$pdf->Cell(52);
if($Em_vf_piel=='ANORMAL'){    
    $pdf->Cell(5 ,5,'X',1,0,'C');
}else{
    $pdf->Cell(5 ,5,'',1,0,'C');
}

$pdf->Ln(6);
$pdf->Cell(5);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(15 ,5,'COJINETES (ALMOHADILLAS)',0,0);
$pdf->Cell(55);
$pdf->SetFont('Arial','B',8);
if($Em_vf_cojinetes=='NORMAL'){    
    $pdf->Cell(5 ,5,'X',1,0,'C');
}else{
    $pdf->Cell(5 ,5,'',1,0,'C');
}
$pdf->Cell(52);
if($Em_vf_cojinetes=='ANORMAL'){    
    $pdf->Cell(5 ,5,'X',1,0,'C');
}else{
    $pdf->Cell(5 ,5,'',1,0,'C');
}

$pdf->Ln(6);
$pdf->Cell(5);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(15 ,5,utf8_decode('UÑAS'),0,0);
$pdf->Cell(55);
$pdf->SetFont('Arial','B',8);
if($Em_vf_unias=='NORMAL'){    
    $pdf->Cell(5 ,5,'X',1,0,'C');
}else{
    $pdf->Cell(5 ,5,'',1,0,'C');
}
$pdf->Cell(52);
if($Em_vf_unias=='ANORMAL'){    
    $pdf->Cell(5 ,5,'X',1,0,'C');
}else{
    $pdf->Cell(5 ,5,'',1,0,'C');
}

$pdf->Ln(6);
$pdf->Cell(5);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(15 ,5,'OIDOS',0,0);
$pdf->Cell(55);
$pdf->SetFont('Arial','B',8);
if($Em_vf_oidos=='NORMAL'){    
    $pdf->Cell(5 ,5,'X',1,0,'C');
}else{
    $pdf->Cell(5 ,5,'',1,0,'C');
}
$pdf->Cell(52);
if($Em_vf_oidos=='ANORMAL'){    
    $pdf->Cell(5 ,5,'X',1,0,'C');
}else{
    $pdf->Cell(5 ,5,'',1,0,'C');
}

$pdf->Ln(6);
$pdf->Cell(5);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(15 ,5,'ARIAS GENITALES',0,0);
$pdf->Cell(55);
$pdf->SetFont('Arial','B',8);
if($Em_vf_arias=='NORMAL'){    
    $pdf->Cell(5 ,5,'X',1,0,'C');
}else{
    $pdf->Cell(5 ,5,'',1,0,'C');
}
$pdf->Cell(52);
if($Em_vf_arias=='ANORMAL'){    
    $pdf->Cell(5 ,5,'X',1,0,'C');
}else{
    $pdf->Cell(5 ,5,'',1,0,'C');
}

$pdf->Ln(6);
$pdf->Cell(5);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(15 ,5,'GLANDULAS MAMARIAS',0,0);
$pdf->Cell(55);
$pdf->SetFont('Arial','B',8);
if($Em_vf_glandulas=='NORMAL'){    
    $pdf->Cell(5 ,5,'X',1,0,'C');
}else{
    $pdf->Cell(5 ,5,'',1,0,'C');
}
$pdf->Cell(52);
if($Em_vf_glandulas=='ANORMAL'){    
    $pdf->Cell(5 ,5,'X',1,0,'C');
}else{
    $pdf->Cell(5 ,5,'',1,0,'C');
}

$pdf->Ln(6);
$pdf->Cell(5);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(15 ,5,'EXTREMIDADES',0,0);
$pdf->Cell(55);
$pdf->SetFont('Arial','B',8);
if($Em_vf_extremidades=='NORMAL'){    
    $pdf->Cell(5 ,5,'X',1,0,'C');
}else{
    $pdf->Cell(5 ,5,'',1,0,'C');
}
$pdf->Cell(52);
if($Em_vf_extremidades=='ANORMAL'){    
    $pdf->Cell(5 ,5,'X',1,0,'C');
}else{
    $pdf->Cell(5 ,5,'',1,0,'C');
}
$x2 = $pdf->GetX();
$y2 = $pdf->GetY(); 

$pdf->Line(10,$y2+7 ,185,$y2+7 ); // LINEA HORIZONTAL
$pdf->Line(10,$y+5 ,10,$y2+7 );   // LINEA VERTICAL
$pdf->Line(185,$y+5 ,185,$y2+7 ); // LINEA VERTICAL

//*************************************************  NUTRICIÓN E HIGIENE  */
$pdf->Ln(13);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(30 ,5,utf8_decode('> NUTRICIÓN E HIGIENE'),0,0);
$pdf->Ln(6);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(60 ,5,'ESTADO NUTRICIONAL',1,0,'L');
$pdf->SetFont('Arial','',9);

if($Em_nh_estado=='DELGADO'){   
    $pdf->SetFillColor(151, 239, 182); // establece el color del fondo de la celda (en este caso es AZUL 
    $pdf->Cell(27 ,5,'DELGADO',1,0,'C',true);
}else{
    $pdf->SetTextColor(0,0,0);
    $pdf->Cell(27 ,5,'DELGADO',1,0,'C');
}
if($Em_nh_estado=='IDEAL'){   
    $pdf->SetFillColor(151, 239, 182); // establece el color del fondo de la celda (en este caso es AZUL 
    $pdf->Cell(27 ,5,'IDEAL',1,0,'C',true);
}else{
    $pdf->SetTextColor(0,0,0);
    $pdf->Cell(27 ,5,'IDEAL',1,0,'C');
}
if($Em_nh_estado=='GORDO'){   
    $pdf->SetFillColor(151, 239, 182); // establece el color del fondo de la celda (en este caso es AZUL 
    $pdf->Cell(27 ,5,'GORDO',1,0,'C',true);
}else{
    $pdf->SetTextColor(0,0,0);
    $pdf->Cell(27 ,5,'GORDO',1,0,'C');
}
if($Em_nh_estado=='OBESO'){   
    $pdf->SetFillColor(151, 239, 182); // establece el color del fondo de la celda (en este caso es AZUL 
    $pdf->Cell(27 ,5,'OBESO',1,0,'C',true);
}else{
    $pdf->SetTextColor(0,0,0);
    $pdf->Cell(27 ,5,'OBESO',1,0,'C');
}

$pdf->Ln(5);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(60 ,5,'PELAJE',1,0,'L');
$pdf->SetFont('Arial','',9);

if($Em_nh_pelaje=='ADECUADO'){   
    $pdf->SetFillColor(151, 239, 182); // establece el color del fondo de la celda (en este caso es AZUL 
    $pdf->Cell(27 ,5,'ADECUADO',1,0,'C',true);
}else{
    $pdf->SetTextColor(0,0,0);
    $pdf->Cell(27 ,5,'ADECUADO',1,0,'C');
}
if($Em_nh_pelaje=='ACEPTABLE'){   
    $pdf->SetFillColor(151, 239, 182); // establece el color del fondo de la celda (en este caso es AZUL 
    $pdf->Cell(27 ,5,'ACEPTABLE',1,0,'C',true);
}else{
    $pdf->SetTextColor(0,0,0);
    $pdf->Cell(27 ,5,'ACEPTABLE',1,0,'C');
}
if($Em_nh_pelaje=='DETERIORADO'){   
    $pdf->SetFillColor(151, 239, 182); // establece el color del fondo de la celda (en este caso es AZUL 
    $pdf->Cell(27 ,5,'DETERIORADO',1,0,'C',true);
}else{
    $pdf->SetTextColor(0,0,0);
    $pdf->Cell(27 ,5,'DETERIORADO',1,0,'C');
}
if($Em_nh_pelaje=='TERRIBLE'){   
    $pdf->SetFillColor(151, 239, 182); // establece el color del fondo de la celda (en este caso es AZUL 
    $pdf->Cell(27 ,5,'TERRIBLE',1,0,'C',true);
}else{
    $pdf->SetTextColor(0,0,0);
    $pdf->Cell(27 ,5,'TERRIBLE',1,0,'C');
}


$pdf->Ln(6);
$pdf->SetFillColor(255,255,255);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(30 ,5,'SEDANTE',1,0,'L',true);
$pdf->SetFont('Arial','',9);
if($Em_nh_sedante=='SI'){   
    $pdf->SetFillColor(151, 239, 182); // establece el color del fondo de la celda (en este caso es AZUL 
    $pdf->Cell(7 ,5,'SI',1,0,'C',true);
    $pdf->SetFillColor(255,255,255);
    $pdf->Cell(7 ,5,'NO',1,0,'C',true);
}else{
    $pdf->SetFillColor(255,255,255);
    $pdf->Cell(7 ,5,'SI',1,0,'C',true);    
    $pdf->SetFillColor(151, 239, 182); // establece el color del fondo de la celda (en este caso es AZUL 
    $pdf->Cell(7 ,5,'NO',1,0,'C',true);
}


$pdf->SetFont('Arial','B',9);
$pdf->Cell(16);
$pdf->Cell(40 ,5,'PUNTAJE DE SALUD',1,0,'L',true);
$pdf->SetFont('Arial','',9);
if($Em_nh_puntaje==0){
    $pdf->SetFillColor(151, 239, 182);
    $pdf->Cell(6 ,5,'0',1,0,'C',true);
}else{
    $pdf->Cell(6 ,5,'0',1,0,'C');
}
if($Em_nh_puntaje==2){
    $pdf->SetFillColor(151, 239, 182);
    $pdf->Cell(6 ,5,'2',1,0,'C',true);
}else{
    $pdf->Cell(6 ,5,'2',1,0,'C');
}
if($Em_nh_puntaje==4){
    $pdf->SetFillColor(151, 239, 182);
    $pdf->Cell(6 ,5,'4',1,0,'C',true);
}else{
    $pdf->Cell(6 ,5,'4',1,0,'C');
}
if($Em_nh_puntaje==6){
    $pdf->SetFillColor(151, 239, 182);
    $pdf->Cell(6 ,5,'6',1,0,'C',true);
}else{
    $pdf->Cell(6 ,5,'6',1,0,'C');
}
if($Em_nh_puntaje==8){
    $pdf->SetFillColor(151, 239, 182);
    $pdf->Cell(6 ,5,'8',1,0,'C',true);
}else{
    $pdf->Cell(6 ,5,'8',1,0,'C');
}
if($Em_nh_puntaje==10){
    $pdf->SetFillColor(151, 239, 182);
    $pdf->Cell(6 ,5,'10',1,0,'C',true);
}else{
    $pdf->Cell(6 ,5,'10',1,0,'C');
}


//*************************************************  RECOMENDACIÓN  */
$pdf->Ln(13);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(30 ,5,utf8_decode('> RECOMENDACIÓN'),0,0);
$pdf->Ln(6);
$pdf->SetX(10);
$pdf->SetFont('Arial','',9);
$pdf->MultiCell(175,5,utf8_decode($Em_nh_recomendacion),1, 'J');

$pdf->Cell(55);
$pdf->SetFont('Arial','B',8);


$pdf->Output();


?>