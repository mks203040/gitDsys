<script>function myFunction() {alert("Данные успешно обновлены!");}</script>

<?php
include('00_db_fns.php');
//Получить массив для 5 типов документов;
$menu = get_menu();
//получить и отобразить $_GET; 
$input = $_GET['idDoc'];
//получить массив с фильтром
$out = form_data($input);
//основные переменные - определить
$out_id = $out[0]['0']; 
$out_date = $out[0]['1']; 
$out_type = $out[0]['2']; 
$out_nrdoc = $out[0]['3'];
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css.css">
<title>Title of the document</title>
</head>

<body>

<!-- 
Я хочу, чтобы данные отправлялись на страницу 00_admin_form_action.php
Получить print_r($_POST)
Далее выполнить даннные добавив изменения в таблицу; 
Вывести header(location: )новые данные; 
Увидеть, что таблица обновляется. 

-->

<form method="post" id="add-edit" name="post1" action="00_admin_form_action.php">
<table width="899" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td id="tablehader">ID</td>
    <td id="tablehader">ДАТА</td>
    <td id="tablehader">НОМЕР</td>
    <td id="tablehader">ТИП</td>
    <td id="tablehader">ENTER</td>
  </tr>
  <tr>
    <td><input type="text" name="id" value="<? echo $out_id; ?>"/></td>
    <td><input type="text" name="date" value="<? echo $out_date; ?>"/></td>
    <td><input type="text" name="document" value="<? echo $out_nrdoc; ?>"/></td>
    <td><select name="type" size="1"><? foreach ($menu as $view): ?><option <? 
		$type1 = $view['0'];
		if ($type1 == $out_type) {echo "selected=\"selected\"";}
		else {echo "";}?> value="<? echo  $type1 ?>"><? echo $view['1']; ?></option><? endforeach; ?></select>
     </td>
     
    <td><input name="save" type="submit" value="ИЗМЕНИТЬ" action="refresh" onclick="myFunction()" /></td>
  </tr>
</table>
</form>



<?
//ПОЛУЧЕНИЕ МАССИВА С ФИЛЬТРОМ $_GET; 
$input = $_GET["idDoc"];
$memo = fotki($input);

//БЛОК ПОДСЧЕТА КОЛИЧЕСТВО ЛИСТОВ
// echo '<pre> Количество сканов: ';
$how = COUNT($memo); 
// echo $how; 
//print_r($memo);
?>



<form action="00_upload_file.php?id=<? echo ($input); ?>" method="post" enctype="multipart/form-data">
<table width="899" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td id="tablehader">ВЫБРАТЬ (ШАГ 1)</td>
    <td id="tablehader">ЗАГРУЗИТЬ (ШАГ 2)</td>
    <td id="tablehader">ЗАГРУЖЕНО ШТ.</td>
    <td id="tablehader">УДАЛИТЬ ИЗОБРАЖЕНИЯ</td>
  </tr>
  
  
  
  <tr>
    <td><input type="file" name="file[]" id="file" multiple/></td>
    <td><input type="submit" name="submit" value="ЗАГРУЗИТЬ ФАЙЛЫ" /></td>
    <td><? echo $how;  ?></td>
    <td><a id="button2" href="00_delete_scan.php?id=<? echo ($input); ?>">УДАЛИТЬ</a></td>
  </tr>
</table>

</form>


<table width="899" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td id="tablehader">ЗАГРУЖЕННЫЕ ДОКУМЕНТЫ</td>

  </tr>
  
  
  
  <tr>
    <td>
    <? foreach($memo as $item):  ?>
<img src="files/<?  echo $item[2]; ?>" width="100"/>

<? endforeach; ?>
    
    </td>
  </tr>
</table>

<div style="background-color:#CCC">
<!-- ОТОБРАЗИТЬ ФОТОГРАФИИ -->



</div>

</body>
</html>