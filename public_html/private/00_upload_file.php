<font color="red">


<?php
include('00_db_fns.php');

//проверка 
echo '<pre>';

// $report_1 = $_FILES["file"]; print_r($report_1);
// $report_2 = $_FILES["file"]["tmp_name"]; print_r($report_2);
// $report_3 = date('o-m-d'); print_r($report_3);
echo '</pre>';
//end


//переменные для цикла fereach; 
$in_0 = $_FILES["file"]["tmp_name"]; //массив tmp_name файлов;
echo "<pre>";
print_r($in_0);
echo "</pre>";

$in_empty = $in_0[0];
print_r($in_0);
$in1 = $_GET['id'];

IF ($in_empty)
{
	foreach ($in_0 as $value) {
	
	$in_1 = "files/"; //адресс файлов
	$in_2 = 'document_'.date('o-m-d_H-i-s_'); // первая часть имени с датой и времененм; 
	$in_3 = uniqid(); // случайное значение; внетри foreach; 
	$in_4 = '.jpg'; // формат файла, считается, что все файлы в формате jpg; 
	
	$in1zzz = '5';
	$in2 = $in_1 . $in_2 . $in_3 . $in_4;
	$in3 = $in_2 . $in_3 . $in_4;
	
	row_insert_photo($in1, $in3);
	move_uploaded_file($value, $in2);
	echo "</br>FILE UPLOADED = " . $in2;
	echo 'goto = ' . $in1;
   	// header ('location: 01_admin-form.php?idDoc=' . $in1 );
	
}
}
else 
{
	header ('location: 01_admin-form.php?idDoc=' . $in1 );
}


?>
</font>


