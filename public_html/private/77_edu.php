<? 
include('00_db_fns.php');


// =========================================
// #идея создания массива без fareach


/* 


echo '<pre>';
$in1 = array (

array ( // при копированни array, строка присваивается автоматич;
'key' => 'video_1.mp4',
'name' => 'video_2.mp4',
'date' => 'video_3.mp4',
),
array (
'key' => 'video_1.mp4',
'name' => 'video_2.mp4',
'date' => 'video_3.mp4',
),
);

print_r($in1);
echo '</pre>';

// =========================================
// #создать новый массив с foreach
// #массив в FR делается с индексом $count=0; $array[$count]; $count++; после FR вывесть print_r;
// #получить массив
$start = '2015-01-18 02:28:25'; $array = number_part1($start);
echo "<pre>"; print_r($array); echo "</pre>";

$count = 0; 
foreach ($array as $item) 
{
	$ar1 = $item['scanId'];
	echo "$ar1".'<br>';

		$ar2[$count] = array (
			array ( 
				'id' => $ar1,
				'name' => 'video_2.mp4',
				'date' => 'video_3.mp4',
			),
		); 
		$count++;
}
// #вывести полученный массив после foreach;
echo '<pre>'; print_r($ar2); echo '</pre>';


*/


// 
// =========================================
// внедрить результат



//#получить массив foreach; 
$st1 = '2015-01-18 02:28:25';




function number_2_fin($st1)  //$st1 = 'zakazDate'; out($res_array)= 'dokumenti zakazinnije'
{
$ar1 = number_2_1($st1); 
$res_array = array();
$count = 0;
foreach($ar1 as $item) 
{
$in1 = $item[0];
$res_array[$count] = number_2_2($in1); 
$count++;
// echo $in1.'<br>';
}
echo '<pre>'; print_r($res_array); echo '</pre>';
return $res_array;
}

$st1 = '2015-01-18 02:28:25';
$st2 = '2015-01-18 02:35:58';
$st3 = '2015-01-18 03:02:28';
$st4 = '2015-01-18 03:02:41';
$fin1 = number_2_fin($st4);







// 
// =========================================
// 
// 
?>
