
<?php

//var_dump($report); 
//var_dump($llega); die; 

// require_once 'symfony.inc.php';

// Create new PHPExcel object
ini_set('memory_limit', '-1');
$objPHPExcel = new sfPhpExcel();

// Set properties
$objPHPExcel->getProperties()->setCreator("BBVA sistema de actividades");
$objPHPExcel->getProperties()->setLastModifiedBy("BBVA sistema de actividades");



// Add some data, we will use printing features
echo date('H:i:s') . " Add some data\n";
$i = 1;
$objPHPExcel->getActiveSheet()->setCellValue('A1', 'Posición');
$objPHPExcel->getActiveSheet()->setCellValue('B1', 'Código');
$objPHPExcel->getActiveSheet()->setCellValue('C1', 'Nombre');
$objPHPExcel->getActiveSheet()->setCellValue('D1', 'Oficina');
$objPHPExcel->getActiveSheet()->setCellValue('E1', 'Zona');
$objPHPExcel->getActiveSheet()->setCellValue('F1', 'Area');
$objPHPExcel->getActiveSheet()->setCellValue('G1', 'Resultado');
$objPHPExcel->getActiveSheet()->setCellValue('H1', 'Bono');
$objPHPExcel->getActiveSheet()->setCellValue('I1', 'Fecha de finalización');

 if(!$usrf) {
foreach($report as $rep): $i++;    
    $objPHPExcel->getActiveSheet()->setCellValue('A' . $i, $i-1);
    $objPHPExcel->getActiveSheet()->setCellValue('B' . $i, $rep->getsfGuardUserProfile()->getUserBankId());
    $objPHPExcel->getActiveSheet()->setCellValue('C' . $i, $rep->getsfGuardUserProfile()->getFirstName() ." ". $rep->getsfGuardUserProfile()->getLastName() );
    $objPHPExcel->getActiveSheet()->setCellValue('D' . $i, $rep->getsfGuardUserProfile()->getDepto()->getDepto());
    $objPHPExcel->getActiveSheet()->setCellValue('E' . $i, $rep->getsfGuardUserProfile()->getZone()->getZone());
    $objPHPExcel->getActiveSheet()->setCellValue('F' . $i, $rep->getsfGuardUserProfile()->getArea()->getArea());
    $objPHPExcel->getActiveSheet()->setCellValue('G' . $i, $rep->getResult());
    $objPHPExcel->getActiveSheet()->setCellValue('H' . $i, $rep->getBonus());
    $objPHPExcel->getActiveSheet()->setCellValue('I' . $i, $rep->getDateEnd());

 endforeach;  
 }
 if($usersreport != null) {
 foreach($usersreport as $repo): $i++;    
    $objPHPExcel->getActiveSheet()->setCellValue('A' . $i, $i-1);
    $objPHPExcel->getActiveSheet()->setCellValue('B' . $i, $repo->getUserBankId());
    $objPHPExcel->getActiveSheet()->setCellValue('C' . $i, $repo->getFirstName() ." ". $repo->getLastName() );
    $objPHPExcel->getActiveSheet()->setCellValue('D' . $i, $repo->getDepto()->getDepto());
    $objPHPExcel->getActiveSheet()->setCellValue('E' . $i, $repo->getZone()->getZone());
    $objPHPExcel->getActiveSheet()->setCellValue('F' . $i, $repo->getArea()->getArea());

 endforeach; 
 }


$objPHPExcel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
$objPHPExcel->getActiveSheet()->getPageSetup()->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);




// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
			header("Cache-Control: no-store, no-cache, must-revalidate");
			header("Cache-Control: post-check=0, pre-check=0", false);
			header("Pragma: no-cache");
			header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
			header('Content-Disposition: attachment;filename="' . $name.'.xlsx"');
	
			$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
			ob_end_clean();
			
			$objWriter->save('php://output'); 
			
//$objWriter->save(str_replace('.php', '.xlsx', __FILE__));

?>



