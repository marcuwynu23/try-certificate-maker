<?php
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->AddPage('L');
$mpdf->SetSourceFile(__DIR__.'/template/template.pdf');
$templatePage = $mpdf->ImportPage(1);
$mpdf->UseTemplate($templatePage);
// set name inside the template and set font size and font family
$mpdf->SetFont('Arial', 'B', 16);
$mpdf->SetTextColor(0, 0, 0);
// set coordinates to position name
$mpdf->SetXY(50, 50);

// write name on the template
$mpdf->Write(0, 'John Doe');

$mpdf->Output();

