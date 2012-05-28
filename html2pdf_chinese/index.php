<?php
require('html2fpdf.php');
$pdf=new HTML2FPDF();
$pdf->AddGBFont('GB','╥бкн_GB2312');
$pdf->AddPage();
$fp = fopen("sample.html","r");
$strContent = fread($fp, filesize("sample.html"));
fclose($fp);
$pdf->WriteHTML(iconv("UTF-8","GB2312",$strContent));
$pdf->Output("sample.pdf");
echo "PDF file is generated successfully!";
?>