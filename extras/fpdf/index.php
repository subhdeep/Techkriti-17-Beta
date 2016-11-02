<?php
	
	// echo "dsdsstring";
	// die();
	
	
	$details=$GLOBALS['details'];

	$pool='B';
	if($details['class']=='9'||$details['class']=='10'){
		$pool='A';
	}

	$schoolId=$details['school_id'];
	if(strlen($schoolId)==1){
		$schoolId='001';
	}
	$Id=$details['id'];
	if(strlen($Id)==1){
		$Id='000'.$Id;
	}else{
		if(strlen($Id)==2){
			$Id='00'.$Id;
		}else{
			if(strlen($Id)==3){
				$Id='0'.$Id;
			}
		}
	}

	$rollno=$GLOBALS['code'].$schoolId.$pool.$Id;

	$name="Amit Saharan";
	$gender="Male";
	$DOB='2002-09-05';
	$school='My school';
	$phone='7755839799';
	$class='12';
	// $rollno='My Roll No';
	$timing='10:00AM - 11:30 AM, 25 OCT 2015';
	$center='X SChool , Kota';

	$name=$details['fullname'];
	$gender=$details['gender']=='M'?'Male':'Female';
	$DOB=$details['dob'];
	$school=$details['school'];
	$phone=$details['phone'];
	$class=$details['class'];
	$center=$GLOBALS['school_center'];

	include('fpdf.php');
	$pdf=new FPDF();
	$pdf->AddPage('P','A4');
	$pdf->SetFont('Arial','',14);
	$pdf->Image('/srv/http/2016.techkriti.org/extras/fpdf/logo.jpg',10,10,190,140);
	
	$pdf->SetXY(46,60);
	$pdf->Cell(0,0,$name,0,2,'L',false);
	
	$pdf->SetXY(50,66);
	$pdf->Cell(0,0,$gender);

	$pdf->SetXY(40,74);
	$pdf->Cell(0,0,$DOB);

	$pdf->SetXY(50,81);
	$pdf->Cell(0,0,$school);

	$pdf->SetXY(54,87);
	$pdf->Cell(0,0,$phone);

	$pdf->SetXY(60,98);
	$pdf->Cell(0,0,$class);

	$pdf->SetXY(52,105);
	$pdf->Cell(0,0,$rollno);

	$pdf->SetXY(65,116);
	$pdf->Cell(0,0,$timing);

	$pdf->SetXY(65,123);
	$pdf->Cell(0,0,$center);
	$pdf->SetFont('Arial','',10);

	$pdf->SetXY(15,135);
	$pdf->Cell(0,0,'*Candidates should bring good quality blue/black ball point pens for the examination');
	$pdf->SetXY(15,140);
	$pdf->Cell(0,0,'*Candidates shall be present at the examination Centre atleast 30 minutes before the examination');


	$offset=140;



	$pdf->Image('/srv/http/2016.techkriti.org/extras/fpdf/logo.jpg',10,10+$offset,190,140);
	
	$pdf->SetXY(46,60+$offset);
	$pdf->Cell(0,0,$name,0,2,'L',false);
	
	$pdf->SetXY(50,66+$offset);
	$pdf->Cell(0,0,$gender);

	$pdf->SetXY(40,74+$offset);
	$pdf->Cell(0,0,$DOB);

	$pdf->SetXY(50,81+$offset);
	$pdf->Cell(0,0,$school);

	$pdf->SetXY(54,87+$offset);
	$pdf->Cell(0,0,$phone);

	$pdf->SetXY(60,98+$offset);
	$pdf->Cell(0,0,$class);

	$pdf->SetXY(52,105+$offset);
	$pdf->Cell(0,0,$rollno);

	$pdf->SetXY(65,116+$offset);
	$pdf->Cell(0,0,$timing);

	$pdf->SetXY(65,123+$offset);
	$pdf->Cell(0,0,$center);
	
	$pdf->SetXY(15,132+$offset);
	$pdf->Cell(0,0,'*Candidates should bring good quality blue/black ball point pens for the examination');
	$pdf->SetXY(15,136+$offset);
	$pdf->Cell(0,0,'*Candidates shall be present at the examination Centre atleast 30 minutes before the examination');	

	$pdf->output();
