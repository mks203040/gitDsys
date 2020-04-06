<font color="red">
<pre> 


<?php

// возвращает - доступ к файлу фукнций; 
include('00_db_fns.php'); 


// возвращает - массив импортированных файлов;
$in_0 = $_FILES["file"]["name"];
$tmp = $_FILES["file"]["tmp_name"];

// возвращает - html - массив $_FILES;
// print_r($in_0); print_r($tmp);




?>


</font>


<font color="green"> 

<?php // !! - открытие php

// !! - функция - возвращает - основные 8 переменный для импорта; 
// ввод - имя файла - 150209(01,2,transvora)-01(01,150209).jpg
// вывод - ... 
// $FILE1DATE: 150209-01
// $FILE2TYPE: 2
// $FILE3COMPANY: transvora
// $FILE4JPG: 150209(01,2,transvora)-01(01,150209).jpg
// $PHP1DATE: 2015-04-13_05-21-21
// $PHP2PACKNAME: 150209(01,2,transvora)
// $PHP3MONTH: 215-02
// $PHP4YEAR: 2015
function fnsPostNameArray($file) { 

// возвращает - новое имя файла с одним задлетилем "-"; 
// ввод - 150209(01,2,transvora)-01(01,150209).jpg
// вывод - 150209-01-2-transvora-01-01-150209-.jpg 
$vowels = array("(", ")-", ",", ")", "_"); // razdelenije
$newFileName = str_replace($vowels, "-", $file); // razdelenije $in1=name$

// возращает - массив - разделяет имя файла;
$newArrayFromFile = explode("-", $newFileName); // $out1=name;

// возвращает - перменные для инпорта бд; 
@$file1date = $newArrayFromFile[0] . '-' . $newArrayFromFile[1]; 
@$file2type = $newArrayFromFile[2];
@$file3company = $newArrayFromFile[3];
@$file4jpg = $file; 
@$php1date = date('o-m-d_H-i-s'); 
@$php2packname = $newArrayFromFile[0] . '(' . $newArrayFromFile[1] . ',' . $newArrayFromFile[2] . ',' . $newArrayFromFile[3] . ')';
$php3month = '2' . substr($file1date, 0, 2) . '-' . substr($file1date, 2, 2);
$php4year = '20' . substr($file1date, 0, 2);

// возвращает - перменные для ипорта - html; 
// echo '<br>';
// echo '$FILE1DATE: ' . $file1date . '<BR>';
// echo '$FILE2TYPE: ' . $file2type . '<BR>';
// echo '$FILE3COMPANY: ' . $file3company . '<BR>';
// echo '$FILE4JPG: ' . $file4jpg . '<BR>';
// echo '$PHP1DATE: ' . $php1date . '<BR>';
// echo '$PHP2PACKNAME: ' . $php2packname . '<BR>';
// echo '$PHP3MONTH: ' . $php3month . '<BR>';
// echo '$PHP4YEAR: ' . $php4year . '<BR>';

// возвращает - ввод переменных в бд mega.adminTable
db_connect();
$result = mysql_query("
INSERT INTO photos (file1date, file2type, file3company, libfile, php1date, idlib, php3month, php4year)
VALUES ('$file1date', '$file2type', '$file3company', '$file4jpg', '$php1date', '$php2packname', '$php3month', '$php4year')"); 
} // !! - закрытие функции


foreach ($in_0 as $value) {
	fnsPostNameArray($value);
}


// возращает - переменные для ипорта в бд;  
// foreach ($in_0 as $key) {$array = fnsPostNameArray($key);}

// mysql - id; = 1
// file - date; = 2140305; #0
// file - type; = 2 (invoice); #2 
// file - partner; = Kornica; #3
// file - fileName = 150209(01,2,transvora)-01(01,150209).jpg;  
// php - importDate; 2015-0410-23:33
// php - packName;
// php - month; 
// php - year; 





// header ('location: _test1.php');



//возвращает - два массива в foreach!!! 
foreach ($in_0 as $key => $value) { 
$from = $tmp[$key];
$to =  'files/' . $value;
// echo $to . '</br>';
move_uploaded_file($from, $to);
}

# header ('location: 01_admin/01_admin.php?name=%3E0');
echo "<script> window.location.replace('01_admin/01_admin.php?name=%3E0') </script>";

?>

</pre>
</font>