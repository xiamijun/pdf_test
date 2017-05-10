<?php
/**
 * Created by PhpStorm.
 * User: XJ
 * Date: 2017/5/9
 * Time: 20:56
 */
require_once 'TCPDF-master/tcpdf.php';
//实例化
$pdf=new TCPDF('P','mm','A4',true,'UTF-8',false);

//设置文档信息
$pdf->SetCreator('hello');
$pdf->SetAuthor('xiamijun');
$pdf->SetTitle('welcome');
$pdf->SetSubject('Tcpdf');
$pdf->SetKeywords('pdf,php');

// 设置页眉和页脚信息
$pdf->setHeaderData(PDF_HEADER_LOGO,PDF_HEADER_LOGO_WIDTH,'hello','world',array(0,64,255),array(0,64,128));
$pdf->setFooterData(array(0,64,0), array(0,64,128));

// 设置页眉和页脚字体
$pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// 设置默认等宽字体
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// 设置间距
$pdf->SetMargins(PDF_MARGIN_LEFT,PDF_MARGIN_TOP,PDF_MARGIN_RIGHT);
$pdf->setHeaderMargin(PDF_MARGIN_HEADER);
$pdf->setFooterMargin(PDF_MARGIN_FOOTER);

// 设置分页
$pdf->SetAutoPageBreak(true,PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set default font subsetting mode
$pdf->setFontSubsetting(true);

//设置字体
$pdf->SetFont('dejavusans', '', 14);

$pdf->AddPage();

$str1='hello world pdf';

$pdf->Write(0,$str1,'',false,'',true,0,false,false,0);

$pdf->Output('t.pdf','I');