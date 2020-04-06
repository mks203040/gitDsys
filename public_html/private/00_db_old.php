<?php

/**
 Установка сайта; 
 
1_Подключение к базе данных;
 	... "Создать и импорт бд"
	// Создать бд;
	// Импортировать базу данных mega.sql
 	... "Подкючиться к бд"
	// В функции db_connect() прописать переменные (хост, пользователь, пароль, название дб);
	// Включить функцию  на сервере "Разрешить загрузку файлов на сервер"";
	// Главный файл является admin.php; 
	
2_Настройка печати; 
	// При печати отключается режим "напечатать колонтитулы"; 
	// В итоге .. один лист - это логотип и документ; (это смотрим в "предварительный просмотр" перед печатью. Документы не должы "заезжать" на чужие листы)
	// После проверки документа в пред.просмотре; документ сохраняется в формат pdf (Chrome); Все проверено, и при отключении колонтитулов, все печатается в PDF;

3_Перменная $user_forma: отображается на трех листах в правом верхнем углу страницы;
 */

// $user_forma = 'MIHAILS SOLOVJOVS';
$user_forma = 'IDAMAINE';
// $user_forma = 'GO-FUTURE';



// подключения к БД
function db_connect()
{
    $host = 'localhost';
    $user = 'admin2';
    $pswd = '';
    $db = 'mega';
    $connection = mysql_connect($host, $user, $pswd);
    mysql_query("SET CHARACTER SET 'utf8'");
    if(!$connection || !mysql_select_db($db, $connection))
    {
        return false;    
    }
    return $connection;    
}


// Постройка массива
function db_result_to_array($result)
{
    $res_array = array();
    $count = 0;
    while($row = @mysql_fetch_array($result))
    {
        $res_array[$count] = $row;
        $count++;
    }
	
    return $res_array;    
}


// Получить массив - меню 
function get_menu()
{
    db_connect();
    $query = "SELECT * FROM pages";
    $result = mysql_query($query);
    $result = db_result_to_array($result);
    return $result;   
}

// Получить массив 2в1 - тип && данные
function get_doc($get)
{
    db_connect();
    $query = "SELECT *, pages.name FROM doc 
	JOIN pages ON doc.page = pages.id
	WHERE doc.page $get 
	ORDER BY doc.idDoc;
	";
    $result = mysql_query($query);
    $result = db_result_to_array($result);
    return $result;   
}

// Получить массив с фильтром $_GET - меню
function get_h1($get)
{
    db_connect();
    $query = "SELECT * FROM pages
	WHERE pages.id $get ";
    $result = mysql_query($query);
    $result = db_result_to_array($result);
    return $result;   
}

// Запрос изображений по id = массив; 
function fotki($in)
{
    db_connect();
    $query = "SELECT * FROM photos
	WHERE photos.idlib = $in"; // 'вставляю пакет - 150210(01,2,kruszwica)'
    $result = mysql_query($query);
    $result = db_result_to_array($result);
    return $result;
}

// форма - данные для формы с фильтром по id
function form_data($get)
{
    db_connect();
    $query = "SELECT * FROM doc
	WHERE doc.idDoc = $get";
    $result = mysql_query($query);
    $result = db_result_to_array($result);
    return $result;   
}





//фукнция - обновить указанную строку (id = ручная)
function update_row($in0, $in1, $in2, $in3) {
// $in0 = '1'; //id
// $in1 = '2010-10-10'; //date
// $in2 = '!!!!!!'; //nrdoc
// $in3 = '2'; // invoice, doc, etc

db_connect();
$result = mysql_query("
UPDATE doc 
SET date='$in1', nrdoc='$in2', page='$in3' 
WHERE idDoc='$in0';
"); 
}


function row_insert($in) 
{
db_connect();
echo 'row_insert';
$date = date('o-m-d');
$result = mysql_query("
INSERT INTO doc (date, page, nrdoc)
VALUES ('$date', '$in', '###-###-###')
"); 
}


function row_insert_photo($in1, $in2) 
{
echo "123"; 
db_connect();
$result = mysql_query("
INSERT INTO photos (idlib, libfile)
VALUES ('$in1', '$in2')
");
}
	
function delete_photo($in1) 
{
echo "DELETE COMPLETED"; 
db_connect();
$result = mysql_query("
DELETE FROM photos
WHERE idlib=$in1;
");
}	




function delete_record($in1) 
{
echo "DELETE COMPLETED"; 
db_connect();
$result = mysql_query("
DELETE FROM doc
WHERE idDoc=$in1;
");
}	

function insert_zakaz($in1) 
{
db_connect();
echo $in1 . '<br>';

$result = mysql_query("
INSERT INTO zakaz (zDate)
VALUES ('$in1')
");

}


function select_zakaz()
{
    db_connect();
    $query = "SELECT * FROM zakaz";
    $result = mysql_query($query);
    $result = db_result_to_array($result);
    return $result;   
}

function insert_zakazscan($in1, $in2) 
{
db_connect();
$result = mysql_query("
INSERT INTO zakazScan (scanDate, scanId)
VALUES ('$in1', '$in2')
");
echo 'insert_zakazscan_vipolnen';
}

function select_n_doc($get)
{
    db_connect();
    $query = "SELECT * FROM zakazScan
	WHERE zakazScan.scanDate = '$get'";
    $result = mysql_query($query);
    $result = db_result_to_array($result);
	$out1 = count($result);
	echo $out1;
}


function number_part1($start) // $in1 = "date"; $out1 = '$ar1('документы Ид')';  
{
	db_connect();
	$query = "SELECT scanId FROM zakazScan
	WHERE zakazScan.scanDate = '$start' ";
	$result = mysql_query($query);
    $result = db_result_to_array($result);
	return $result;
}

function number_part2($start)// $in1 = "номер документа"; $out1 = "img в документе"; $ex1 = '5';
{	
	db_connect();
	$query = "SELECT libfile FROM photos
	WHERE photos.idlib = '$start' ";
	$result = mysql_query($query);
    $result = db_result_to_array($result);
	$result2 = count($result);
	return $result2;
}

function number_part3($start)// $in1 = "date"; $out = sum($ar1); 'сумм=("фоток в заказе")';
	{
	$array = number_part1($start);
	$sum = 0;
	foreach ($array as $item)
	{
		$in1 = number_part2($item[0]);
		$sum+= $in1;
	}
	echo $sum;
}

//# $ar1 = "ввод = дата; выход = массив с idZakaz"; = $fn1
//# $ar2 = "ввод = ид; выход = массив1строка(данные о пакете);= $fn2; 
//# $ar3 = "foreach; ввод = ид(из массива); вывод=(строка док); вывод =(вставить в шаблон новово массива); отобразить массив print_r($ar2)m;"

function number_2_1($start) // $in1 = "date"; $out1 = '$ar1('документы Ид')';  
{
	db_connect();
	$query = "SELECT scanId FROM zakazScan
	WHERE zakazScan.scanDate = '$start' ";
	$result = mysql_query($query);
    $result = db_result_to_array($result);
	return $result;
}

function number_2_2($start) //$in1 = 'id'; $ex = 242; $out = 'array_1row'; // одна строчка
{	
	db_connect();
    $query = "SELECT *, pages.name FROM doc 
	JOIN pages ON doc.page = pages.id
	WHERE doc.idDoc = $start 
	ORDER BY doc.idDoc;
	";
    $result = mysql_query($query);
    $result = db_result_to_array($result);
    return $result;   
}

function number_2_fin($st1)  //$st1 = '2015-01-18 02:28:25'; out($res_array)= 'dokumenti zakazinnije'
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
// echo '<pre>'; print_r($res_array); echo '</pre>';
return $res_array;
}

function number_3_1($start) // $in1 = "date"; $out1 = '$ar1('документы Ид')';  
{
	db_connect();
	$query = "SELECT scanId FROM zakazScan
	WHERE zakazScan.scanDate = '$start' ";
	$result = mysql_query($query);
    $result = db_result_to_array($result);
	return $result;
}

function number_3_2($start) //$in1 = 'id'; $ex = 242; $out = 'array_1row'; // одна строчка
{	
	db_connect();
	$query = "SELECT photos.libfile FROM photos WHERE photos.idlib = $start";
	
    $result = mysql_query($query);
    $result = db_result_to_array($result);
    return $result;   
}


// $st1 = '2015-01-18 02:28:25';		
function number_3_3($st1)
	{
		$ar1 = number_3_1($st1); 		
		$res_array = array(); 		$count = 0;
	
		foreach($ar1 as $item) 
			{
				$in1 = $item[0];		$res_array[$count] = number_3_2($in1); 		$count++;
			}
			//echo '<pre>'; print_r($res_array); echo '</pre>';
		return $res_array;
	}

function delete_zakaz($in1) 
{
echo "DELETE COMPLETED"; 
db_connect();
$result = mysql_query("
DELETE FROM zakaz
WHERE zId=$in1;
");
}	


?>