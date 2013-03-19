
<?php

var_dump($report); die;

// require_once 'symfony.inc.php';
$exc = '';
// Create new PHPExcel object
echo date('H:i:s') . " Create new PHPExcel object\n";
$objPHPExcel = new sfPhpExcel();

// Set properties
echo date('H:i:s') . " Set properties\n";
$objPHPExcel->getProperties()->setCreator("Maarten Balliauw");
$objPHPExcel->getProperties()->setLastModifiedBy("Maarten Balliauw");
$objPHPExcel->getProperties()->setTitle("Office 2007 XLSX Test Document");
$objPHPExcel->getProperties()->setSubject("Office 2007 XLSX Test Document");
$objPHPExcel->getProperties()->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.");
$objPHPExcel->getProperties()->setKeywords("office 2007 openxml php");
$objPHPExcel->getProperties()->setCategory("Test result file");


// Add some data, we will use printing features
echo date('H:i:s') . " Add some data\n";
for ($i = 1; $i < 200; $i++) {
	$objPHPExcel->getActiveSheet()->setCellValue('A' . $i, $i);
	$objPHPExcel->getActiveSheet()->setCellValue('B' . $i, 'Test value');
}	

// Set header and footer. When no different headers for odd/even are used, odd header is assumed.
echo date('H:i:s') . " Set header/footer\n";
$objPHPExcel->getActiveSheet()->getHeaderFooter()->setOddHeader('&L&G&C&HPlease treat this document as confidential!');
$objPHPExcel->getActiveSheet()->getHeaderFooter()->setOddFooter('&L&B' . $objPHPExcel->getProperties()->getTitle() . '&RPage &P of &N');

// Add a drawing to the header
echo date('H:i:s') . " Add a drawing to the header\n";
$objDrawing = new PHPExcel_Worksheet_HeaderFooterDrawing();
$objDrawing->setName('PHPExcel logo');
$objDrawing->setPath('images/phpexcel_logo.gif');
$objDrawing->setHeight(36);
$objPHPExcel->getActiveSheet()->getHeaderFooter()->addImage($objDrawing, PHPExcel_Worksheet_HeaderFooter::IMAGE_HEADER_LEFT);

// Set page orientation and size
echo date('H:i:s') . " Set page orientation and size\n";
$objPHPExcel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
$objPHPExcel->getActiveSheet()->getPageSetup()->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);

// Rename sheet
echo date('H:i:s') . " Rename sheet\n";
$objPHPExcel->getActiveSheet()->setTitle('Printing');


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);

		
// Save Excel 2007 file
echo date('H:i:s') . " Write to Excel2007 format\n";
//$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');



// Echo memory peak usage
echo date('H:i:s') . " Peak memory usage: " . (memory_get_peak_usage(true) / 1024 / 1024) . " MB\r\n";

// Echo done
echo date('H:i:s') . " Done writing file.\r\n";

header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
			header("Cache-Control: no-store, no-cache, must-revalidate");
			header("Cache-Control: post-check=0, pre-check=0", false);
			header("Pragma: no-cache");
			header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
			header('Content-Disposition: attachment;filename="Report.xlsx"');
	
			$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
			ob_end_clean();
			
			$objWriter->save('php://output');
			$excel->disconnectWorksheets();
			unset($excel);
//$objWriter->save(str_replace('.php', '.xlsx', __FILE__));

?>

<?php //print_r($report); die;
foreach($report as $rep): ?>
<p><?php echo $rep->getsfGuardUserProfile()->getFirstName() . ' ' .  $rep->getIdUsrql() . ' tot= ' . $rep->getResult() ?></p>
<?php endforeach; ?>

