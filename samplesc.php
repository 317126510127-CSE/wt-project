<?php
$var1=$_POST['date1'];
$var2=$_POST['tit'];
$var3=$_POST['sub'];
$var4=$_POST['bod'];
require ("fpdf/fpdf.php");

$pdf = new FPDF();
$pdf ->AddPage();
$pdf->Image("Capture5.jpg",6,6,220);
$pdf->Ln(3);
$pdf->SetFont("Arial","",14);
$pdf->Cell(310,100,"Dt : {$var1}",0,1,'C');

$pdf->SetFont("Arial","U",18);
$pdf->Cell(180,0, "{$var2}",0,1,'C');
$pdf->Ln(20);

$pdf->SetFont("Arial","",14);
//$pdf->Cell(50,40,"Subject:",0,1,'C');
$pdf->MultiCell(0,8,"Subject :  {$var3}");

$pdf->Ln(10);
$pdf->SetFont("Arial","",14);
//$pdf->Cell(40,10,"{$var4}",0,1,'C');
$pdf->MultiCell(0,7,$var4);
//$pdf->Image("Capture3.jpg",0,240,220);
$pdf->output();
?> 
