<?
include('00_db_fns.php');

//Получить массив данных для foreach; 
$get = $_GET["idDoc"]; // echo $get; // $get = '150218(01,2,kruszwica)';
$echo = foreachImgNames($get);
// print_r($echo);
// $how = COUNT($memo); 
//print_r($memo);
echo '</pre>';
?>

<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Konstantins" />
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="css.css">

<!-- Отобразить title с элементом id; -->
	<title>#<? echo $input;  ?></title>
</head>
<body style="
text-align:center; ">


<? foreach($echo as $item):  ?>
<img src="<?  echo 'files/' . $item[0]; ?>" width="800"/>

<? endforeach; ?>

</body>
</html>