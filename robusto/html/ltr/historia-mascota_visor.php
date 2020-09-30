<?php
session_start();
require('lib_externos/fpdf/fpdf.php');
require_once("../config/Cado.php");


$Condicion = $_GET["Cond"];

if (strlen($Condicion) == 1) {
    $C = 'M000'.$Condicion;
} else if (strlen($Condicion) == 2) {
    $C = 'M00'.$Condicion;
} else if (strlen($Condicion) == 3) {
    $C = 'M0'.$Condicion;
} else {
    $C = 'M'.$Condicion;
}

$GLOBALS['Codigo'] = "FICHA DE HISTORIA CLINICA MASCOTA - ".$C;



$sql = "CALL SP_Obtener_Encabezado_Hc_x_IdMascota('$Condicion')";
$oCado = new Cado();
$rst = $oCado->ejecute_sql($sql);
$dt = mysqli_fetch_array($rst);

$p_nombre = ': '.$dt['Mascota_Nombre'];
$p_especie= ': '.$dt['Especie_Nombre'];
$p_raza = ': '.$dt['Raza_Nombre'];
$p_sexo = ': '.$dt['Mascota_IdSexo'];
$p_color = ': '.$dt['Mascota_Color'];
$p_edad = ': '.$dt['Mascota_Edad'].' AÑOS';
$pr_nombre = ': '.$dt['Cliente_Nombre'];
$pr_apellido = ': '.$dt['Cliente_Apellido'];
$pr_direccion = ': '.$dt['Cliente_Direccion'];
$pr_telefono = ': '.$dt['Cliente_TelefonoCel'];
$pr_email = ': '.$dt['Cliente_Email'];


$sql = "CALL SP_Obtener_TblBanio_x_IdMascota('$Condicion')";
$oCado = new Cado();
$rst = $oCado->ejecute_sql($sql);
while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {

    //$myArray[] = $row;
    $data[] = $row;
}

$sql = "CALL SP_Obtener_TblDesparacitacion_x_IdMascota('$Condicion')";
$oCado = new Cado();
$rst = $oCado->ejecute_sql($sql);
while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {

    //$myArray[] = $row;
    $data2[] = $row;
}

$sql = "CALL SP_Obtener_TblVacunas_x_IdMascota('$Condicion')";
$oCado = new Cado();
$rst = $oCado->ejecute_sql($sql);
while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {

    //$myArray[] = $row;
    $data3[] = $row;
}

$sql = "CALL SP_Obtener_TblAtencion_x_IdMascota('$Condicion')";
$oCado = new Cado();
$rst = $oCado->ejecute_sql($sql);
while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {

    //$myArray[] = $row;
    $data_a[] = $row;
}



class PDF extends FPDF
{  
    var $widths;
    var $aligns;

    // Cabecera de pagina
    function Header()
    {
        // Logo
        //$this->Image('logo_pb.png', 10, 8, 33);
        //$this->Image('DANIEL1.jpg', 10, 8, 33);
        
        $this->Image('../../app-assets/images/logo/gavet-80x80.png', 10, 8, 10,10);
        //
        // Arial bold 15
        $this->SetFont('Arial', 'B', 10);
        // Movernos a la derecha
        $this->Cell(50);
        // Titulo
        $this->Cell(100, 5, $GLOBALS['Codigo'], 1, 0, 'C');
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

        // Simple table
    function BasicTable($header, $data)
    {
        $c1 = 14;
        $c2 = 16;
        $c3 = 55;
        $c4 = 14;
        $c5 = 75;
        
        // Header
        $cont_h=1;
        $this->Cell(10);
        foreach($header as $col){

            if($cont_h==1){
                //$this->Cell($c1,6,utf8_decode($col),1);
                $this->Cell($c1,6,utf8_decode($col),1,0,'C');
            }
            if($cont_h==2){
                $this->Cell($c2,6,utf8_decode($col),1,0,'C');
            }
            if($cont_h==3){
                $this->Cell($c3,6,utf8_decode($col),1,0,'C');
            }
            if($cont_h==4){
                $this->Cell($c4,6,utf8_decode($col),1,0,'C');
            }
            if($cont_h==5){
                $this->Cell($c5,6,utf8_decode($col),1,0,'C');
            }              
            $cont_h =  $cont_h + 1 ;      
        }
            //$this->Cell(40,7,utf8_decode($col),1);
        $this->Ln();
        // Data
        foreach($data as $row)
        {
            $cont=1;
            $v1 ="";
            $v2 ="";
            $v3 ="";
            $v4 ="";
            $v5 ="";
            $this->Cell(10);
            foreach($row as $col){
                if($cont==1){
                    //$this->Cell($c1,6,utf8_decode($col),1);
                    //$this->Cell($c1,5,utf8_decode($col),1);

                    //$this->Cell($c1,5,utf8_decode($col),1);
                    $v1 = utf8_decode($col);
                }
                if($cont==2){
                    //$this->Cell($c2,5,utf8_decode($col),1);
                    $v2 = utf8_decode($col);
                }
                if($cont==3){
                    //$this->Cell($c3,5,utf8_decode($col),1);
                    $v3 = utf8_decode($col);
                }
                if($cont==4){
                    //$this->Cell($c4,5,utf8_decode('S/. '.$col),1);


                    //$this->MultiCell($c4,6,utf8_decode($col),1, 'J');
                    //$this->MultiCell($c4,5,utf8_decode('S/. '.$col),1, 'J');
                    $v4 = utf8_decode('S/. '.$col);
                }
                if($cont==5){
                    //$this->Cell($c5,6,utf8_decode($col),1);
                    //$this->MultiCell($c5,5,utf8_decode($col),1, 'J');

                    $v5 = utf8_decode($col);
                }                   
                $cont =  $cont + 1 ;                                            
            }
            
            $this->SetWidths(array($c1,$c2,$c3,$c4,$c5));
            $this->Row(array($v1,$v2,$v3,$v4,$v5));
            $this->Ln(0.5); 
        }
    }


    function BasicAtencion($data_a)
    {
        $c1 = 18;
        $c2 = 27;
        $c3 = 85;
        $c4 = 20;
        // Header
        $cont_h=1;
        // Data
        foreach($data_a as $row)
        {
            $cont=1;
           
            $x1=0;
            $y1=0;
            $x2=0;
            $y2=0;            
            foreach($row as $col){
                //$this->SetDash(); //restores no dash
                if($cont==1){
                    $this->Cell(10);
                    $this->SetFont('Arial','B',9);
                    $this->Cell(25 ,5,utf8_decode('ATENCIÓN NRO. :'),0,0);
                    $this->Cell(5);
                    $this->SetFont('Arial','',9);                    
                    $this->Cell(30 ,5,$col,0,0);
                    //$this->Ln(6);
                }
                if($cont==2){
                    //$this->Cell(20);
                    $this->SetFont('Arial','B',9);
                    $this->Cell(11 ,5,utf8_decode('FECHA :'),0,0);
                    $this->Cell(5);
                    $this->SetFont('Arial','',9);                    
                    $this->Cell(30 ,5,$col,0,0);
                    $y = $this->GetY();
                    $this->SetDash(); //restores no dash
                    $this->Line(20,$y+5 ,185,$y+5 );
                    //$this->Line(20,55,185,55);

                    $this->Ln(10);                    
                }                
                if($cont==3){
                    $this->Cell(10);
                    $this->SetFont('Arial','B',9);
                    $x1 = $this->GetX();                    
                    $this->Cell(165 ,5,utf8_decode('ANAMNESIS'),1,0);
                     $y1 = $this->GetY();                                        
                    $this->Ln();                    
                    $this->SetX(20);
                    $this->SetFont('Arial','',9);
                    $this->MultiCell(165,5,utf8_decode($col),0, 'J');                    
                    $this->Ln(1);
                }
                if($cont==4){
                    $this->SetFont('Arial','B',9);                    
                    $this->Cell(10);
                    $this->Cell(165 ,5,utf8_decode('SIGNOS CLINICOS'),1,0);
                    $this->Ln();                    
                    $this->Cell(10); 

                
                    //$this->Line(20,55,185,55);     -- LINEA HORIZONTAL SUPERIOR    

                    //-----$this->Line(20,60,20,145);
                    //$this->Line(185,60,185,145);

                    //$this->Line(20,145,185,145);  

                    $this->Cell(5,5,utf8_decode('T° :'),0,0);
                    $this->Cell(1);
                    $this->SetFont('Arial','',9);                    
                    $this->Cell(10 ,5,$col,0,0);
                }
                if($cont==5){
                    $this->Cell(3);
                    $this->SetFont('Arial','B',9);
                    $this->Cell(6 ,5,utf8_decode('FC :'),0,0);
                    $this->Cell(1);
                    $this->SetFont('Arial','',9);                    
                    $this->Cell(10 ,5,$col,0,0);
                } 
                if($cont==6){
                    $this->Cell(3);
                    $this->SetFont('Arial','B',9);
                    $this->Cell(6 ,5,utf8_decode('FR :'),0,0);
                    $this->Cell(1);
                    $this->SetFont('Arial','',9);                    
                    $this->Cell(10 ,5,$col,0,0);
                }
                if($cont==7){
                    $this->Cell(3);
                    $this->SetFont('Arial','B',9);
                    $this->Cell(14 ,5,utf8_decode('DESHIDRATACIÓN :'),0,0);
                    $this->Cell(18);
                    $this->SetFont('Arial','',9);                    
                    $this->Cell(10 ,5,$col,0,0);
                    $this->Ln();                    
                } 
                if($cont==8){
                    $this->Cell(10); 
                    $this->SetFont('Arial','B',9);
                    $this->Cell(13 ,5,utf8_decode('MUCOSAS :'),0,0);
                    $this->Cell(6);
                    $this->SetFont('Arial','',9);                    
                    $this->Cell(35 ,5,$col,0,0);
                }  
                if($cont==9){
                    $this->Cell(10);
                    $this->SetFont('Arial','B',9);
                    $this->Cell(10 ,5,utf8_decode('TLLC :'),0,0);
                    $this->Cell(1);
                    $this->SetFont('Arial','',9);                    
                    $this->Cell(10 ,5,$col,0,0);
                  
                }  
                if($cont==10){
                    $this->Cell(10);
                    $this->SetFont('Arial','B',9);
                    $this->Cell(15 ,5,utf8_decode('VOMITOS :'),0,0);
                    $this->Cell(3);
                    $this->SetFont('Arial','',9);                    
                    $this->Cell(10 ,5,$col,0,0);
                }   
                if($cont==11){
                    $this->Cell(3);
                    $this->SetFont('Arial','B',9);
                    $this->Cell(15 ,5,utf8_decode('DIARREAS :'),0,0);
                    $this->Cell(4);
                    $this->SetFont('Arial','',9);                    
                    $this->Cell(10 ,5,$col,0,0);
                    $this->Ln();                    
                }

                if($cont==12){
                    $this->Cell(10);
                    $this->SetFont('Arial','B',9);
                    $this->Cell(15 ,5,utf8_decode('GANGLIOS :'),0,0);
                    $this->Cell(3);
                    $this->SetFont('Arial','',9);                    
                    $this->Cell(45 ,5,$col,0,0);                  
                }
                if($cont==13){
                    $this->Cell(3);
                    $this->SetFont('Arial','B',9);
                    $this->Cell(10 ,5,utf8_decode('PESO :'),0,0);
                    $this->Cell(4);
                    $this->SetFont('Arial','',9);                    
                    $this->Cell(10 ,5,$col,0,0);
                    $this->Ln();                    
                }                
                
                if($cont==14){
                    $this->Cell(10);
                    $this->SetFont('Arial','B',9);
                    $this->Cell(165 ,5,utf8_decode('DIAGNOSTICOS'),1,0);
                    $this->Ln(); 
                    $this->Cell(10);
                    $this->SetFont('Arial','B',9);                    
                    $this->Cell(30 ,5,utf8_decode('DX. PRESUNTIVO  : '),0,0);
                    $this->Cell(1);
                    $this->SetX(51);                    
                    $this->SetFont('Arial','',9);  
                    //$this->Cell(30 ,5,utf8_decode($col),0,0);
                    $this->MultiCell(130,5,utf8_decode($col),0, 'J');                    
                    //$this->Ln(1);
                }
                if($cont==15){
                    $this->Cell(10);
                    $this->SetFont('Arial','B',9);                    
                    $this->Cell(30 ,5,utf8_decode('DX. DEFINITIVO     : '),0,0);
                    $this->Cell(1);
                    $this->SetX(51);                      
                    $this->SetFont('Arial','',9);  
                    //$this->Cell(30 ,5,utf8_decode($col),0,0);
                    $this->MultiCell(130,5,utf8_decode($col),0, 'J');                       
                    //$this->Ln(1);
                }  
                if($cont==16){
                    $this->Cell(10);
                    $this->SetFont('Arial','B',9);                    
                    $this->Cell(30 ,5,utf8_decode('DX. SOLICITADO   : '),0,0);
                    $this->Cell(1);
                    $this->SetX(51);                       
                    $this->SetFont('Arial','',9);  
                    //$this->Cell(30 ,5,utf8_decode($col),0,0);
                    $this->MultiCell(130,5,utf8_decode($col),0, 'J');                         
                    $this->Ln(1);
                } 
                if($cont==17){ 
                    $this->SetFont('Arial','B',9);                    
                    $this->Cell(10);
                    $this->Cell(165 ,5,utf8_decode('TRATAMIENTO'),1,0);
                    $this->Ln();                                        
                    $this->Cell(10);
                    $this->SetFont('Arial','B',9);                    
                    $this->Cell(30 ,5,utf8_decode('DESCRIPCIÓN: '),0,0);
                    $this->Ln();                      
                    $this->SetX(20);
                    $this->SetFont('Arial','',9);  
                    $this->MultiCell(165,5,utf8_decode($col),0, 'J'); 
                    //$this->Ln();                  
                }  
                if($cont==18){
                    $this->Cell(10);
                    $this->SetFont('Arial','B',9);                    
                    $this->Cell(30 ,5,utf8_decode('NOTAS ADICIONALES  : '),0,0);
                    $this->Ln();                      
                    $this->SetX(20);
                    $this->SetFont('Arial','',9);  
                    $this->MultiCell(165,5,utf8_decode($col),0, 'J'); 
                    $x2 = $this->GetX();
                    $y2 = $this->GetY(); 

                    $this->Line($x1,$y1,$x1,$y2);
                    $this->Line(185,$y1,185,$y2);
                    $this->Line($x1,$y2,185,$y2);
                }                                                                               
                
                /*                 $y2 = $this->GetY(); 
                $this->Cell(30 ,5,utf8_decode($y2),0,0); */
                $cont =  $cont + 1 ;     
            }

            $y2 = $this->GetY(); 
            if($y2>=190){
                $this->AddPage();
            }else{
                $this->Ln(); 
            }         
        }
    }


    // CLASE TABLA

    function SetWidths($w)
    {
        //Set the array of column widths
        $this->widths=$w;
    }
    
    function SetAligns($a)
    {
        //Set the array of column alignments
        $this->aligns=$a;
    }
    
    function Row($data)
    {
        //Calculate the height of the row
        $nb=0;
        for($i=0;$i<count($data);$i++)
            $nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
        $h=5*$nb;
        //Issue a page break first if needed
        $this->CheckPageBreak($h);
        //Draw the cells of the row
        for($i=0;$i<count($data);$i++)
        {
            $w=$this->widths[$i];
            $a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
            //Save the current position
            $x=$this->GetX();
            $y=$this->GetY();
            //Draw the border
            $this->Rect($x,$y,$w,$h);
            //Print the text
            $this->MultiCell($w,5,$data[$i],0,$a);
            //Put the position to the right of the cell
            $this->SetXY($x+$w,$y);
        }
        //Go to the next line
        $this->Ln($h);
    }
    
    function CheckPageBreak($h)
    {
        //If the height h would cause an overflow, add a new page immediately
        if($this->GetY()+$h>$this->PageBreakTrigger)
            $this->AddPage($this->CurOrientation);
    }
    
    function NbLines($w,$txt)
    {
        //Computes the number of lines a MultiCell of width w will take
        $cw=&$this->CurrentFont['cw'];
        if($w==0)
            $w=$this->w-$this->rMargin-$this->x;
        $wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
        $s=str_replace("\r",'',$txt);
        $nb=strlen($s);
        if($nb>0 and $s[$nb-1]=="\n")
            $nb--;
        $sep=-1;
        $i=0;
        $j=0;
        $l=0;
        $nl=1;
        while($i<$nb)
        {
            $c=$s[$i];
            if($c=="\n")
            {
                $i++;
                $sep=-1;
                $j=$i;
                $l=0;
                $nl++;
                continue;
            }
            if($c==' ')
                $sep=$i;
            $l+=$cw[$c];
            if($l>$wmax)
            {
                if($sep==-1)
                {
                    if($i==$j)
                        $i++;
                }
                else
                    $i=$sep+1;
                $sep=-1;
                $j=$i;
                $l=0;
                $nl++;
            }
            else
                $i++;
        }
        return $nl;
    }


}





//$Condicion = utf8_decode('Atención Nro. '.$_GET["Cond"]);

// Creaci�n del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
//$pdf->SetFont('Times', '', 12);


$pdf->SetFont('Arial','BU',9);
$pdf->Cell(25);
$pdf->Cell(30 ,5,'DATOS DEL PACIENTE : ',0,0);
$pdf->Cell(45);
$pdf->Cell(30 ,5,'DATOS DEL PROPIETARIO : ',0,0);
$pdf->Ln(8);

$pdf->SetFont('Arial','',8);
$pdf->Cell(30);
$pdf->Cell(15 ,5,'Nombre',0,0);
$pdf->Cell(10 ,5,utf8_decode($p_nombre),0,0);
$pdf->Cell(49);
$pdf->Cell(15 ,5,'Nombre',0,0);
$pdf->Cell(10 ,5,utf8_decode($pr_nombre),0,0);
$pdf->Ln(5);

$pdf->Cell(30);
$pdf->Cell(15 ,5,'Especie',0,0);
$pdf->Cell(10 ,5,utf8_decode($p_especie),0,0);
$pdf->Cell(49);
$pdf->Cell(15 ,5,'Apellidos',0,0);
$pdf->Cell(10 ,5,utf8_decode($pr_apellido),0,0);
$pdf->Ln(5);

$pdf->Cell(30);
$pdf->Cell(15 ,5,'Raza',0,0);
$pdf->Cell(10 ,5,utf8_decode($p_raza),0,0);
$pdf->Cell(49);
$pdf->Cell(15 ,5,utf8_decode('Dirección'),0,0);
//$pdf->Cell(10 ,5,utf8_decode($pr_direccion),0,0);

                 
$pdf->SetX(128);
$pdf->MultiCell(65,5,utf8_decode($pr_direccion),0, 'J'); 

$pdf->Ln(1);

$pdf->Cell(30);
$pdf->Cell(15 ,5,'Sexo',0,0);
$pdf->Cell(10 ,5,utf8_decode($p_sexo),0,0);
$pdf->Cell(49);
$pdf->Cell(15 ,5,'Telefono',0,0);
$pdf->Cell(10 ,5,utf8_decode($pr_telefono),0,0);
$pdf->Ln(5);

$pdf->Cell(30);
$pdf->Cell(15 ,5,'Color',0,0);
$pdf->Cell(10 ,5,utf8_decode($p_color),0,0);
$pdf->Cell(49);
$pdf->Cell(15 ,5,'Email',0,0);
$pdf->Cell(10 ,5,utf8_decode($pr_email),0,0);
$pdf->Ln(5);

$pdf->Cell(30);
$pdf->Cell(15 ,5,'Edad : ',0,0);
$pdf->Cell(10 ,5,utf8_decode($p_edad),0,0);
/*
$pdf->Cell(35);
$pdf->Cell(30 ,5,'Nombre : ',0,0);
$pdf->Cell(10 ,5,'gato',0,0);
*/
$pdf->Ln(10);
$pdf->SetFont('Arial','BU',10);
$pdf->Cell(10);
$pdf->Cell(30 ,5,utf8_decode('LISTADO DE BAÑOS'),0,0);
$pdf->Ln(10);
$pdf->SetFont('Arial','',7);
$header = array('CODIGO', 'FECHA', 'NOMBRE PRODUCTO', 'PRECIO', 'OBSERVACIÓN');
$pdf->BasicTable($header,$data);

$pdf->Ln(10);
$pdf->SetFont('Arial','BU',10);
$pdf->Cell(10);
$pdf->Cell(30 ,5,utf8_decode('LISTADO DE DESPARACITACIONES'),0,0);
$pdf->Ln(10);
$pdf->SetFont('Arial','',7);
$header = array('CODIGO', 'FECHA', 'NOMBRE PRODUCTO', 'PRECIO', 'OBSERVACIÓN');
$pdf->BasicTable($header,$data2);


$pdf->Ln(10);
$pdf->SetFont('Arial','BU',10);
$pdf->Cell(10);
$pdf->Cell(30 ,5,utf8_decode('LISTADO DE VACUNAS'),0,0);
$pdf->Ln(10);
$pdf->SetFont('Arial','',7);
$header = array('CODIGO', 'FECHA', 'NOMBRE PRODUCTO', 'PRECIO', 'OBSERVACIÓN');
$pdf->BasicTable($header,$data3);

$pdf->AddPage();
$pdf->SetFont('Arial','BU',10);
$pdf->Cell(10);
$pdf->Cell(30 ,5,utf8_decode('LISTADO DE ATENCIONES'),0,0);
$pdf->Ln(10);




$pdf->SetFont('Arial','',9);
$pdf->BasicAtencion($data_a);



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
$pdf->Output();


?>