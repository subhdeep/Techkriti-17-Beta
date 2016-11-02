<?php
	$hisname=$argv[1];
	if(empty($hisname)){
		$hisname=$_GET['name'];
	}
	$filename=$hisname;
	$hisname=str_replace('_',' ',$hisname);
	if(empty($hisname)){
		die('You have failed this city');
	}
	include('fpdf.php');
	$pdf=new FPDF();
	$pdf->AddPage('P',array('1200px','1698px'));
	$pdf->SetFont('Helvetica','',60);
	$pdf->Image('/srv/http/2016.techkriti.org/extras/fpdf/Invitation_Letter.jpg',0,0,1200);
	$pdf->SetFillColor(255,255,255);
	$pdf->SetTextColor(50,50,50);
	$pdf->setXY('172px','186px');
	$pdf->Cell(0,'60px','Dear '.$hisname.',',0,'L',1,'L',true);
	$pdf->output('pr_pdf/'.$filename.'_Invitation_Letter.pdf','F');