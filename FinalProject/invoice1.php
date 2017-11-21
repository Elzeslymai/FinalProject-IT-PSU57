<?php
		require('fpdf/fpdf.php');

	//A4 width : 219mm
	//default margin : 10mm each side
	//writable horizontal : 219-(10*2)=189mm
	session_start();
	$connect = mysqli_connect("localhost","root","","hotelsupport");
    $sql = 'select * from invoice where U_id="'.$_SESSION['username'].'"';
    $result = mysqli_query($connect,$sql);

    while($row = mysqli_fetch_assoc($result)){
    	$filename = str_pad($row['invoice_id'], 7, "0", STR_PAD_LEFT);

    	$sql1 = 'select * from user where U_id="'.$row['U_id'].'"';
    	$result1 = mysqli_query($connect,$sql1);
    	$row1 = mysqli_fetch_assoc($result1);

    	$sql2 = 'select * from user where U_company_name="'.$row['Supply_name'].'"';
    	$result2 = mysqli_query($connect,$sql2);
    	$row2 = mysqli_fetch_assoc($result2);


	$pdf = new FPDF('P','mm','A4');
	$pdf -> AddPage();

	$pdf->AddFont('angsana','','angsa.php');
	$pdf->AddFont('angsana','B','angsab.php');
	$pdf->AddFont('angsana','BI','angsaz.php');
	$pdf->AddFont('angsana','I','angsai.php');

	$pdf->AddFont('cordia','','cordia.php');
	$pdf->AddFont('cordia','B','cordiab.php');
	$pdf->AddFont('cordia','BI','cordiaz.php');
	$pdf->AddFont('cordia','I','cordiai.php');

	//set font to arial, bold, 14pt
	$pdf->SetFont('cordia','B',14);

	// logo
	$pdf->Image('images/logo1.png', 15, 20, 80, 20);

	//HOTEL SUPPORT
	$pdf->SetFont('angsana','B',30);
	$pdf->Cell(0,7,'',0,1);
	$pdf->Cell(110 ,5,'',0,0);
	$pdf->Cell(59 ,5,'PURCHASE ORDER',0,1);

	$pdf->SetFont('cordia','B',14);
	$pdf->Cell(0,5,'',0,1);
	$pdf->Cell(110 ,5,'',0,0);
	$pdf->Cell(59 ,5,'HOTEL SUPPORT',0,1);

	$pdf->SetFont('cordia','',12);
	$pdf->Cell(0,2,'',0,1);
	$pdf->Cell(110 ,2,'',0,0);
	$pdf->Cell(13 ,5,'Address : ',0,0);
	$pdf->Cell(0 ,5,iconv('UTF-8','cp874','142/56 พฤษาวิว กะทู้ ป่าตอง ภูเก็ต'),0,1);

	$pdf->Cell(110 ,2,'',0,0);
	$pdf->Cell(13 ,5,'Phone : ',0,0);
	$pdf->Cell(0 ,5,iconv('UTF-8','cp874','0945966225'),0,1);

	$pdf->Cell(110 ,2,'',0,0);
	$pdf->Cell(13 ,5,'Email : ',0,0);
	$pdf->Cell(0 ,5,iconv('UTF-8','cp874','hotelsupport@email.com'),0,1);


	// END HOTEL SUPPORT

	
	$pdf->Cell(20,15,' ',0,1);
	
	//Cell(width , height , text , border , end line , [align] )
	$pdf->SetFont('angsana','BI',12);

	$pdf->Cell(20,5,' ',0,0);
	$pdf->Cell(150,0.1,' ',1,1);

	$pdf->Cell(20,25,' ',0,0);
	$pdf->Cell(0.1,5,' ',1,0);
	$pdf->Cell(4.9,5,' ',0,0);
	$pdf->Cell(5 ,5,'Seller',0,0);
	$pdf->Cell(65,25,' ',0,0);
	$pdf->Cell(0.1,5,' ',1,0);
	$pdf->Cell(5,25,' ',0,0);
	$pdf->Cell(69.9,5,'Ship to',0,0);
	$pdf->Cell(0.1,5,' ',1,1);//end of line
	
	//Supply and Hotel
	$pdf->SetFont('angsana','B',14);

	$pdf->Cell(20,5,' ',0,0);
	$pdf->Cell(0.1,5,' ',1,0);
	$pdf->Cell(9.9,5,' ',0,0);
	$pdf->Cell(65 ,5,iconv('UTF-8','cp874',''.$row2['U_company_name'].''),0,0);
	$pdf->Cell(0.1,5,' ',1,0);
	$pdf->Cell(10,5,' ',0,0);
	$pdf->Cell(64.9 ,5,iconv('UTF-8','cp874',''.$row1['U_company_name'].''),0,0);
	$pdf->Cell(0.1,5,' ',1,1);//end of line

	//set font to arial, regular, 12pt
	$pdf->SetFont('cordia','',12);

	$pdf->Cell(20,5,' ',0,0);
	$pdf->Cell(0.1,5,' ',1,0);
	$pdf->Cell(9.9,5,' ',0,0);
	$pdf->Cell(65 ,5,iconv('UTF-8','cp874',''.$row2['U_address'].''),0,0);
	$pdf->Cell(0.1,5,' ',1,0);
	$pdf->Cell(10,5,' ',0,0);
	$pdf->Cell(10 ,5,iconv('UTF-8','cp874',''.$row1['U_address'].''),0,0);
	$pdf->Cell(54.9 ,5,'',0,0);
	$pdf->Cell(0.1,5,' ',1,1);//end of line

	$pdf->Cell(20,5,' ',0,0);
	$pdf->Cell(0.1,5,' ',1,0);
	$pdf->Cell(9.9,5,' ',0,0);
	$pdf->Cell(11 ,5,'Phone : ',0,0);
	$pdf->Cell(54,5,iconv('UTF-8','cp874',''.$row2['U_tell'].''),0,0);
	$pdf->Cell(0.1,5,' ',1,0);
	$pdf->Cell(10,5,' ',0,0);
	$pdf->Cell(11 ,5,'Phone : ',0,0);
	$pdf->Cell(53.9 ,5,iconv('UTF-8','cp874',''.$row1['U_tell'].''),0,0);
	$pdf->Cell(0.1,5,' ',1,1);//end of line

	$pdf->Cell(20,5,' ',0,0);
	$pdf->Cell(0.1,5,' ',1,0);
	$pdf->Cell(9.9,5,' ',0,0);
	$pdf->Cell(11 ,5,'Email : ',0,0);
	$pdf->Cell(54,5,iconv('UTF-8','cp874',''.$row2['U_email'].''),0,0);
	$pdf->Cell(0.1,5,' ',1,0);
	$pdf->Cell(10,5,' ',0,0);
	$pdf->Cell(11 ,5,'Email : ',0,0);
	$pdf->Cell(53.9 ,5,iconv('UTF-8','cp874',''.$row1['U_email'].''),0,0);
	$pdf->Cell(0.1,5,' ',1,1);//end of line

	

	$pdf->Cell(20,5,' ',0,0);
	$pdf->Cell(0.1,5,' ',1,0);
	$pdf->Cell(74.9,5,' ',0,0);
	$pdf->Cell(0.1,5,' ',1,0);
	$pdf->Cell(74.9,5,' ',0,0);
	$pdf->Cell(0.1 ,5,'',1,1);//end of line

	$pdf->Cell(20,5,' ',0,0);
	$pdf->Cell(150,0.1,' ',1,1);//end of line
	

	//make a dummy empty cell as a vertical spacer
	$pdf->Cell(189 ,10,'',0,1);//end of line



	$pdf->SetFont('angsana','B',14);

	$pdf->Cell(20,5,' ',0,0);
	$pdf->Cell(90 ,5,'PAYMENT DETAILS',0,1);


	//set font to arial, regular, 12pt
	$pdf->SetFont('cordia','',12);

	$pdf->Cell(20,5,' ',0,0);
	$pdf->Cell(20 ,5,'Payment No. :',0,0);
	$pdf->Cell(59 ,5,iconv('UTF-8','cp874',''.$filename.''),0,1);//end of line

	$pdf->Cell(20,5,' ',0,0);
	$pdf->Cell(15 ,5,'Bill Date :',0,0);
	$pdf->Cell(59 ,5,iconv('UTF-8','cp874',''.$row['date'].''),0,1);//end of line

	$pdf->Cell(20,5,' ',0,0);
	$pdf->Cell(22 ,5,'Purchase Date :',0,0);
	$pdf->Cell(59 ,5,iconv('UTF-8','cp874',''.$row['date'].''),0,1);//end of line

	$pdf->Cell(20,5,' ',0,0);
	$pdf->Cell(20 ,5,'Delivery Date :',0,0);
	$pdf->Cell(59 ,5,iconv('UTF-8','cp874',''.$row['Pick_up_date'].''),0,1);//end of line


	//make a dummy empty cell as a vertical spacer
	$pdf->Cell(189 ,10,'',0,1);//end of line

	//invoice contents
	$pdf->SetFont('angsana','B',14);

	$pdf->Cell(20 ,5,'',0,0);
	$pdf->Cell(10 ,5,'No.',1,0,'C');
	$pdf->Cell(55 ,5,'Product',1,0,'C');
	$pdf->Cell(25 ,5,'Price',1,0,'C');
	$pdf->Cell(25 ,5,'Quantity',1,0,'C');
	$pdf->Cell(34 ,5,'Total',1,1,'C');//end of line

	$pdf->SetFont('angsana','',14);

	//Numbers are right-aligned so we give 'R' after new line parameter
		$sql3 = 'select * from item where invoice_id="'.$row['invoice_id'].'" and U_id="'.$row['U_id'].'"';
    	$result3 = mysqli_query($connect,$sql3);
    	$i=1;
    	$totalprice1 = 0;
		while($row3 = mysqli_fetch_assoc($result3)){
			$totalprice = 0;

			$pdf->Cell(20 ,5,'',0,0);
			$pdf->Cell(10 ,5,$i,1,0,'C');
			$pdf->Cell(55 ,5,iconv('UTF-8','cp874',''.$row3['P_name'].''),1,0);
			$pdf->Cell(25 ,5,iconv('UTF-8','cp874',''.$row3['P_price'].''),1,0,'C');
			$pdf->Cell(25 ,5,iconv('UTF-8','cp874',''.$row3['Quantity'].''),1,0,'C');
			$totalprice += ($row3['P_price'] * $row3['Quantity']);
			$totalprice1 += $totalprice;
			$pdf->Cell(34 ,5,iconv('UTF-8','cp874',''.$totalprice.'฿'),1,1,'C');//end of line
			$i++;
		}

	//summary
	$pdf->Cell(120 ,5,'',0,1);

	

	$pdf->Cell(110 ,5,'',0,0);
	$pdf->Cell(25 ,5,'Subtotal',0,0);
	$pdf->Cell(34 ,5,iconv('UTF-8','cp874',''.$totalprice1.'฿'),1,1,'C');//end of line

	$tax = ($totalprice1 *7 )/100;

	$pdf->Cell(110 ,5,'',0,0);
	$pdf->Cell(25 ,5,'Tax Rate',0,0);
	$pdf->Cell(34 ,5,'7%',1,1,'C');//end of line

	$pdf->Cell(110 ,5,'',0,0);
	$pdf->Cell(25 ,5,'Tax',0,0);
	$pdf->Cell(34 ,5,iconv('UTF-8','cp874',''.$tax.'฿'),1,1,'C');//end of line

	$endtotalprice = $totalprice1 + $tax;

	$pdf->Cell(110 ,5,'',0,0);
	$pdf->Cell(25 ,5,'Total Due',0,0);
	$pdf->Cell(34 ,5,iconv('UTF-8','cp874',''.$endtotalprice.'฿'),1,1,'C');//end of line

	$pdf->SetFont('angsana','B',14);

	$pdf->Cell(110 ,5,'',0,1);

	$pdf->Cell(20 ,5,'',0,0);
	$pdf->Cell(20,5,iconv('UTF-8','cp874','Important:'),0,1);

	$pdf->Cell(20 ,5,'',0,0);
	$pdf->Cell(20,5,iconv('UTF-8','cp874','- Every order must pay cash to our shipping staff when you receive your product at the company.'),0,1);

	$pdf->Cell(20 ,5,'',0,0);
	$pdf->Cell(20,5,iconv('UTF-8','cp874','- Please read all terms and polices on website.'),0,1);

	$pdf->Cell(34 ,5,'',0,1,'C');//end of line


	
	$pdf->Output('F','invoice/'.$filename.'.pdf',false);

	}
	mysqli_close($connect);


	$connect = mysqli_connect("localhost","root","","hotelsupport");
    $sql = 'delete from item where U_id="'.$_SESSION['username'].'"';
    $result = mysqli_query($connect,$sql);
	if(!$result){
		echo "<script>alert('Something wrong !!!');";
	}else{
		echo "<script>document.location='add-to-order.php'</script>";
	}

	mysqli_close($connect);
?>