<?php
require('lib_externos/fpdf/fpdf.php');
require_once('lib_externos/fpdi/src/autoload.php');

use \setasign\Fpdi\Fpdi;
// initiate FPDI



$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'¡Hola, Mundo!');
$pdf->Output();







/*
// define some files to concatenate
$files = array(
    'Laboratory-Report.pdf',
    'doc2.pdf',
    'doc3.pdf'
);

// initiate FPDI
$pdf = new Fpdi();

// iterate through the files
foreach ($files AS $file) {
    // get the page count
    $pageCount = $pdf->setSourceFile($file);
    // iterate through all pages
    for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
        // import a page
        $templateId = $pdf->importPage($pageNo);
        // get the size of the imported page
        $size = $pdf->getTemplateSize($templateId);

        // add a page with the same orientation and size
        //$pdf->AddPage($size['orientation'], $size);
        $pdf->AddPage($size['vertical'], $size);

        // use the imported page
        $pdf->useTemplate($templateId);

        $pdf->SetFont('Helvetica');
        $pdf->SetXY(5, 5);
        $pdf->Write(8, 'A simple concatenation demo with FPDI');
    }
}


// Output the new PDF
$pdf->Output();
*/



/*
$pdf = new Fpdi();
// add a page
$pdf->AddPage();
// set the source file
$pdf->setSourceFile("Laboratory-Report.pdf");
// import page 1
$tplIdx = $pdf->importPage(1);
// use the imported page and place it at point 10,10 with a width of 100 mm
$pdf->useImportedPage($tplIdx, 10, 10, 100);

// now write some text above the imported page
$pdf->SetFont('Helvetica');
$pdf->SetTextColor(255, 0, 0);
$pdf->SetXY(30, 30);
$pdf->Write(0, 'This is just a simple text');
$pdf->Output();
*/


/*
$pdf = new Fpdi();
// add a page
$pdf->AddPage();
// now write some text above the imported page
$pdf->SetFont('Helvetica');
$pdf->SetTextColor(255, 0, 0);
$pdf->SetXY(30, 30);
$pdf->Write(0, 'This is just a simple text');

// add a page
$pdf->AddPage();
// set the source file
$pdf->setSourceFile("Laboratory-Report.pdf");
// import page 1
$tplIdx = $pdf->importPage(1);
// use the imported page and place it at point 10,10 with a width of 100 mm
$pdf->useImportedPage($tplIdx, 10, 10, 200);
*/

/*
$pdf = new Fpdi();
// Comienza con fuente regular
$pdf->SetFont('Arial','',14);
$pdf->Write(5,'Visit ');
// Then put a blue underlined link
$pdf->SetTextColor(0,0,255);
$pdf->SetFont('','U');
$pdf->Write(5,'www.fpdf.org','http://www.fpdf.org');

$pdf->Output();
*/

?>