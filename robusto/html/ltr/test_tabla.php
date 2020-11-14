<?php
//require('mc_table.php');
//session_start();
require('lib_externos/fpdf/fpdf.php');
//require('lib_externos/fpdi/src/Fpdi.php');
require_once('lib_externos/fpdi/src/autoload.php');
require_once("../config/Cado.php");

use \setasign\Fpdi\Fpdi;


// Some dummy functions to generate text content
function GenerateWord()
{
    // Get a random word
    $nb = rand(3, 10);
    $w = '';
    for ($i = 1; $i <= $nb; $i++)
        $w .= chr(rand(ord('a'), ord('z')));
    return $w;
}

function GenerateSentence($words = 500)
{
    // Get a random sentence
    $nb = rand(20, $words);
    $s = '';
    for ($i = 1; $i <= $nb; $i++)
        $s .= GenerateWord() . ' ';
    return substr($s, 0, -1);
}

// The class, that overwrites the Header() method:
class Pdf extends Fpdi
{
    protected $_tplIdx;

    public function Header()
    {
        if (null === $this->_tplIdx) {
            $this->setSourceFile('Laboratory-Report.pdf');
            $this->_tplIdx = $this->importPage(1);
        }

        $this->useImportedPage($this->_tplIdx);
    }
}

// initiate PDF
$pdf = new Pdf();
$pdf->SetTopMargin(30);

// Add a single page and trigger some auto page breaks.
$pdf->AddPage();
$pdf->SetFont('Helvetica');
for ($i = 20; $i > 0; $i--) {
    $pdf->MultiCell(0, 6, GenerateSentence());
    $pdf->Ln();
}

// Output the new PDF
$pdf->Output();

