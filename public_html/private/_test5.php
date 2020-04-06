<? 
function nametofile3company($file) { 

// возвращает - новое имя файла с одним задлетилем "-"; 
// $file = '150209(01,2,transvora)';
// вывод - 150209-01-2-transvora-01-01-150209-.jpg 

$vowels = array("(", ")-", ",", ")", "_"); // razdelenije
$newFileName = str_replace($vowels, "-", $file); // razdelenije $in1=name$

// возращает - массив - разделяет имя файла;
$newArrayFromFile = explode("-", $newFileName); // $out1=name;


// возвращает - перменные для инпорта бд; 
$file1date = $newArrayFromFile[0] . '-' . $newArrayFromFile[1]; 
$file2type = $newArrayFromFile[2];
$file3company = $newArrayFromFile[3];
$file4jpg = $file; 

$php1date = date('o-m-d_H-i-s'); 
$php2packname = $newArrayFromFile[0] . '(' . $newArrayFromFile[1] . ',' . $newArrayFromFile[2] . ',' . $newArrayFromFile[3] . ')';
$php3month = '2' . substr($file1date, 0, 2) . '-' . substr($file1date, 2, 2);
$php4year = '20' . substr($file1date, 0, 2);


// возвращает - перменные для ипорта - html; 
// echo '<br>'; echo '$FILE1DATE: ' . $file1date . '<BR>'; echo '$FILE2TYPE: ' . $file2type . '<BR>'; echo '$FILE3COMPANY: ' . $file3company . '<BR>'; echo '$FILE4JPG: ' . $file4jpg . '<BR>'; echo '$PHP1DATE: ' . $php1date . '<BR>'; echo '$PHP2PACKNAME: ' . $php2packname . '<BR>'; echo '$PHP3MONTH: ' . $php3month . '<BR>'; echo '$PHP4YEAR: ' . $php4year . '<BR>';

echo $file3company;
}

nametofile3company('150209(01,2,transvora)'); 

?>