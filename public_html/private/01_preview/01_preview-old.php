<?php
include('../00_db_fns.php');

?>

<!DOCTYPE HTML>
<html>
<head>
<script>function myFunction() {alert("ЗАКАЗ ВЫПОЛНЕН!");}</script>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../template_modal/shadowbox.css">
<link rel="stylesheet" type="text/css" href="../css.css">
<script type="text/javascript" src="../template_modal/shadowbox.js"></script>
<script type="text/javascript">
Shadowbox.init();
</script>

	<title>DSYS / Просмотр</title>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" />
    <meta http-equiv="content-type" content="text/html" charset="utf-8"/>
   
</head>
<body>

<div id="line1"  >
<div id="line1a">

<select id="all3" style="float: right;" ><option> <? echo $user_forma; ?> </option></select>

<a id="all" class="basic" href="../01_admin/01_admin.php?name=%3E0">УПРАВЛЕНИЕ</a>
<a id="all" class="basic" href="../01_preview/01_preview.php?name=%3E0">[ПРОСМОТР]</a>
<a id="all" class="basic" href="../01_zakazi/01_zakazi.php">ЗАКАЗЫ</a>


</div>
</div>

<div id="line2">
<div id="line2a">
<h2>БАНК ДОКУМЕНТОВ - ПРОСМОТР</h2>
<div id="line2aa">

<div id="line2aaa">
</div>
</div>



</div>
</div>


<? 
// LINE 3 - h1 - название группы; 
?>

<div id="line3">

<div id="line3a">

<h1>



<?
$input = $_GET["name"];
$filter = ">0"; 
//echo $filter;
//	$menu1 = get_h1($input);
//	foreach ($menu1 as $item) { echo $item['name'];}  
//	echo $input;
	
	switch ($input) {
    case '>0':
        echo "*ВСЕ ДОКУМЕНТЫ";
        break;
    case '=1':
        echo "*НОВЫЙ";
        break;
    case '=2':
        echo "БАНК";
        break;
    case '=3':
        echo "ДОГОВОР";
        break;
    case '=4':
        echo "ДОХОДЫ";
        break;
    case '=5':
        echo "КАССА";
        break;
    case '=6':
        echo "ПЕРЕПИСКА";
        break;							
	case '=7':
	    echo "ПРОФОРМА";
	    break;
	case '=8':
	    echo "РАСХОДЫ";
	    break;
	case '=9':
	    echo "УЧЕРЕДИТ.";
	    break;
}
?>
</h1>
<a id="all2" class="all2" href="01_preview.php?name=>0" target="_self">*ALL</a>

<? $menu = get_menu(); ?><? foreach ($menu as $item): ?><a id="all4" href=01_preview.php?name==<? echo $item['id'];?>><? echo $item['name'];?> </a><? endforeach; ?> 

</div>
</div>


<form method="post" action="../00_zakaz_vipolnitj.php">

<?
echo "<table>";
echo "<tr id=\"tablehader\" class=\"one\"> "; 
echo "<td id=\"tablehader\" >"; echo "ПЕЧАТЬ"; echo "</td>";
echo "<td id=\"tablehader\" >"; echo "№"; echo "</td>";
echo "<td id=\"tablehader\" >"; echo "ДАТА"; echo "</td>"; 
echo "<td id=\"tablehader\" >"; echo "ТИП <br>"; echo "</td>"; 
echo "<td id=\"tablehader\" >"; echo "ID - ДОКУМЕНТА"; echo "</td>"; 
echo "<td id=\"tablehader\" >"; echo "СТРАНИЦЫ"; echo "</td>"; 
echo "<td id=\"tablehader\" >"; echo "РЕДАКТИРОВАТЬ"; echo "</td>";


echo "</td>";

$menu = get_doc($input);
foreach ($menu as $item) {
    echo "<tr>";
    echo "<td id=\"tabletext\">"; echo "<input name=\"idIn[]\" type=\"checkbox\" value=\""; echo $item['idDoc']; echo "\">";  echo "</td>";
	echo "<td id=\"tabletext\">";  echo $item['idDoc']; echo "</td>"; 
    echo "<td id=\"tabletext\">"; echo $item['date']; echo "</td>";
    echo "<td id=\"tabletext\">"; echo $item['name']; echo "</td>";
    echo "<td id=\"tabletext\">"; echo $item['nrdoc']; echo "</td>"; $var1 = $item['idDoc']; $memo = fotki($var1); $memo2 = count($memo);
    echo "<td id=\"tabletext\">"; echo $memo2; echo "</td>";
    echo "<td id=\"tabletext\">"; 
   	if ($memo2 == 0) 
   	{
   	echo "нет изображений";
   	}
   	else
   	{
echo "<a id=\"button2\" rel=\"shadowbox[Mixed]\" href=\"../01_img.php"; echo "?idDoc="; echo $item['idDoc']; echo "\" target=\"_blank\">просмотр</a>"; 
	}	
echo "</td>";	
// count and preview - edn 	echo "</tr>";    
}
	echo "</table>";
?>
<input name="save" type="submit" value="ВЫПОЛНИТЬ ЗАКАЗ" action="refresh" onclick="myFunction()" />
</form>



</body>
</html>

