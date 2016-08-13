<?php
/**
 * Created by PhpStorm.
 * User: sunNode
 * Date: 16/8/13
 * Time: 上午2:21
 */
require('html2fpdf/html2fpdf.php');
$pdf=new HTML2FPDF();
$pdf->AddPage();
$fp = fopen("2.hml","r");
$strContent = fread($fp, filesize("2.html"));
fclose($fp);
$pdf->WriteHTML($strContent);
$pdf->Output("sample.pdf");
echo "PDF file is generated successfully!";