<?php
include('../00_db_fns.php');
?>



<!DOCTYPE HTML>
<html>
<head>
<script>function myFunction() {alert("ЗАКАЗ ВЫПОЛНЕН!");}</script>

<script type="text/javascript" language="javascript">// <![CDATA[
function checkAll(formname, checktoggle)
{
  var checkboxes = new Array(); 
  checkboxes = document[formname].getElementsByTagName('input');
 
  for (var i=0; i<checkboxes.length; i++)  {
    if (checkboxes[i].type == 'checkbox')   {
      checkboxes[i].checked = checktoggle;
    }
  }
}
// ]]></script>

<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../template_modal/shadowbox.css">
<link rel="stylesheet" type="text/css" href="../css.css">
<script type="text/javascript" src="../template_modal/shadowbox.js"></script>
<script type="text/javascript">
Shadowbox.init();
</script>



	<title>DSYS / Управление</title>

	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" />
    <meta http-equiv="content-type" content="text/html" charset="utf-8"/>
    


</head>


<body>

<div id="line1"  >
<div id="line1a">
<a id="all" class="basic" href="../01_admin/01_admin.php?name=%3E0">УПРАВЛЕНИЕ</a>
<a id="all" class="basic" href="../01_preview/01_preview.php?name=%3E0">[ПРОСМОТР]</a>
<a id="all" class="basic" href="../01_zakazi/01_zakazi.php">ЗАКАЗЫ</a>
<select id="all3" style="float: right;" ><option> <? echo $user_forma; ?> </option></select>
</div>
</div>


<div id="line2">
<div id="line2a">
<h2>БАНК ДОКУМЕНТОВ - УПРАВЛЕНИЕ</h2>
<div id="line2aa">
<div id="line2aaa">
</div>
</div>
</div>
</div>



<table width="899" border="0" cellspacing="0" cellpadding="0"><tr><td id="tablehader2">
<a id="all2" class="all2" href="01_admin.php?name=>0" target="_self">ALL FILES <? echo '(' . countByTypeAll() . ')'; ?></a>
</td></tr></table>


<table width="899" border="0" cellspacing="0" cellpadding="0"><tr><td id="tablehader2">
<? $menu = get_menu(); ?><? foreach ($menu as $item): ?><a id="all4" href=01_admin.php?name==<? echo $item['url'];?>><? $typeNum = $item['url']; $typeCount = countByTypeGet($typeNum); echo $item['name'] . '(' . $typeCount . ')';?> </a><? endforeach; ?> 
</td></tr></table>


<table width="899" border="0" cellspacing="0" cellpadding="0" id='capital'><tr><td id="tablehader2">
<? $menu = resultArrayListCompany(); // print_r($menu);
foreach ($menu as $item):  ?> 
<a id="all4" href=01_admin.php?month=<?echo $item[0];?>><?echo $item[0];?>
<?// $typeNum = $item[0]; $typeCount = countByTypeGet($typeNum); echo $item['name'] . '(' . $typeCount . ')';?>
 </a><? endforeach; ?> 
</td></tr></table>

<table width="899" border="0" cellspacing="0" cellpadding="0" ><tr><td id="tablehader2">
<? $menu = resultArrayListMonth(); // print_r($menu);
foreach ($menu as $item):  ?> 
<a id="all4" href=01_admin.php?month=<?echo $item[0];?>><?echo $item[0];?>
<?// $typeNum = $item[0]; $typeCount = countByTypeGet($typeNum); echo $item['name'] . '(' . $typeCount . ')';?>
 </a><? endforeach; ?> 
</td></tr></table>








<!-- <div id="line3">-->
<div id="line3a"> 
<h1>
<?
$input = $_GET["name"];


// Возвращает - имя раздела; 
if ($input == '>0') {
	
	$countAll = countByTypeAll();
	
	echo "ВСЕ ДОКУМЕНТЫ" . '(' . $countAll . ')' ;
	
}
else {
	
	$in = substr($input, 1);
	$countGet = countByTypeGet($in);
	$name = returnMenuName($in);
	echo $name . '(' . $countGet . ')';;
	
}



?>
</h1>

</div>
</div>


<div>
<?php
// echo '<pre>ADMIN MODE - ACTIVATED';
// $memo = fotki(1);
// echo '</pre>'; 
?>



<form method="post" name='form3' action="../00_zakaz_vipolnitj.php">
<input name="save" type="submit" value="ВЫПОЛНИТЬ ЗАКАЗ" action="refresh" onclick="myFunction()" />


<a id="all2" class="all2" onclick="javascript:checkAll('form3', true);" href="javascript:void();">ВЫБРАТЬ ВСЕ ДОКУМЕНТЫ</a>

<!-- <a id="all2" class="all2" onclick="javascript:checkAll('form3', false);" href="javascript:void();">[_]</a> -->

<?
echo "<table>";
echo "<tr id=\"tablehader\" class=\"one\"> "; 
echo "<td id=\"tablehader\" >"; echo "ЗАКАЗ"; echo "</td>";
echo "<td id=\"tablehader\" >"; echo "ID - ДОКУМЕНТА"; echo "</td>"; 
echo "<td id=\"tablehader\" >"; echo "ТИП <br>"; echo "</td>"; 
echo "<td id=\"tablehader\" >"; echo "DATE <br>"; echo "</td>"; 
echo "<td id=\"tablehader\" >"; echo "COMPANY <br>"; echo "</td>"; 
echo "<td id=\"tablehader\" >"; echo "MONTH <br>"; echo "</td>"; 
echo "<td id=\"tablehader\" >"; echo "YEAR <br>"; echo "</td>"; 
echo "<td id=\"tablehader\" >"; echo "СТРАНИЦЫ"; echo "</td>"; 
echo "<td id=\"tablehader\" >"; echo "РЕДАКТИРОВАТЬ"; echo "</td>";
echo "</tr>";

echo '<pre>';
	$menu = orderby($input);
//	print_r($menu);
echo '<pre>'; 


foreach ($menu as $item) {

	$documents = $item[0];

	$date = nametocase($documents, 1);
	$company = nametocase($documents, 2);	
	$month = nametocase($documents, 3);
	$year = nametocase($documents, 4);
	$type0 = nametocase($documents, 5);
	
	$type = typename($type0);
	
	
	
    echo "<tr>";
    
//	echo "<td id=\"tabletext\">";  echo $item['idDoc']; echo "</td>";
//  echo "<td id=\"tabletext\">"; echo $item['date']; echo "</td>";
    echo "<td id=\"tabletext\">"; echo "<input name=\"idIn[]\" type=\"checkbox\" value=\""; echo $documents; echo "\">";  echo "</td>";
    echo "<td id=\"tabletext\">"; echo $documents; echo "</td>";
    echo "<td id=\"tabletext\">"; echo $type; echo "</td>";  
    echo "<td id=\"tabletext\">"; echo $date; echo "</td>";
    echo "<td id=\"tabletext\">"; echo $company; echo "</td>";
    echo "<td id=\"tabletext\">"; echo $month; echo "</td>";
    echo "<td id=\"tabletext\">"; echo $year; echo "</td>";

    
    
    echo "<td id=\"tabletext\">";
    
    // $var1 = $item['idDoc']; 
    // $memo = fotki($var1); 
    // @$memo2 = count($memo);
    
    $memo = orderbycount($documents);
    echo $memo; echo "</td>";
    
    
   

	
	echo "<td id=\"tabletext\">"; 
	
	//	echo "<a id=\"button\" href=\"../00_delete_record.php"; echo "?id=";  echo $documents; echo "\" target=\"_self\">удалить</a>"; 
		
		
		// echo "<a id='button2' rel=\"shadowbox[Mixed]\" href=\"../01_admin-form.php"; echo "?idDoc="; echo $item['idDoc']; echo "\" target=\"_blank\">просмотр</a>"; echo "</td>"; 
		
		// _ кнопка _ просмотр _ отправка $GET;
		echo "<a id=\"button2\" rel=\"shadowbox[Mixed]\" href=\"../01_img.php"; 
		echo "?idDoc="; 
		echo $documents; 
		echo "\" target=\"_blank\">просмотр</a>"; 
		
	
	
	echo "</tr>";    

}

	echo "<tr>";
//	echo "<td id=\"tabletext\">"; echo ""; echo "</td>";
//    echo "<td id=\"tabletext\">"; echo ""; echo "</td>";
    echo "<td id=\"tabletext\">"; echo ""; echo "</td>";
    echo "<td id=\"tabletext\">"; echo ""; echo "</td>"; $var1 = @$item['idDoc'];  @$memo2 = count($memo);
    echo "<td id=\"tabletext\">"; echo ""; echo "</td>";
    
    echo "<td id=\"tabletext\">"; echo ''; echo "</td>";
    echo "<td id=\"tabletext\">"; echo ''; echo "</td>";
    echo "<td id=\"tabletext\">"; echo ''; echo "</td>";
    echo "<td id=\"tabletext\">"; echo ''; echo "</td>";


	$get = $_GET['name']; 
	    
	echo "<td id=\"tabletext\">"; 
// 	echo "<a id=\"button3\" href=\"../00_new_record.php"; echo "?name=";  echo $_GET['name']; echo "\" target=\"_self\">новавя запись</a>";  
	echo "</td>"; 
	
	
	echo "</tr>";    
echo "</table>";


if (!$menu) {

echo '<div id=\'line3a\' ><h1 id=\'red\'>НЕТ ФАЙЛОВ... </h1></div>';
	 
}

?>


<a id="all" class="basic" href="00_new_record.php" target="_self">[NEW RECORD]</a>
</div>



<input name="save" type="submit" value="ВЫПОЛНИТЬ ЗАКАЗ" action="refresh" onclick="myFunction()" />

</form>

			

</body>
</html>

