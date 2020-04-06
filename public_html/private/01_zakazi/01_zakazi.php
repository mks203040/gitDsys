<?php
include('../00_db_fns.php');

?>

<!DOCTYPE HTML>
<html>
<head>

<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../template_modal/shadowbox.css">
<link rel="stylesheet" type="text/css" href="../css.css">
<script type="text/javascript" src="../template_modal/shadowbox.js"></script>
<script type="text/javascript">
Shadowbox.init();
</script>

	<title>DSYS / Заказы</title>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" />
    <meta http-equiv="content-type" content="text/html" charset="utf-8"/>

</head>


<body>
<div id="line1"  >
<div id="line1a">

<a id="all" class="basic" href="../01_admin/01_admin.php?name=%3E0">УПРАВЛЕНИЕ</a>
<a id="all" class="basic" href="../01_preview/01_preview.php?name=%3E0">ПРОСМОТР</a>
<a id="all" class="basic" href="../01_zakazi/01_zakazi.php">[ЗАКАЗЫ]</a>

<select id="all3" style="float: right;" ><option> <? echo $user_forma; ?> </option></select>

</div> 
</div>

<div id="line2">
<div id="line2a">
<h2>БАНК ДОКУМЕНТОВ - ЗАКАЗЫ НА ПЕЧАТЬ</h2>
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

<h1><?  ?>ЦЕНТР ОБРАБОТКИ ЗАКАЗОВ</h1>

</div>
</div>


<?

echo "<table>";

echo "<tr>";
echo "<td id=\"tablehader\" >"; echo "ID-ЗАКАЗА <br>"; echo "</td>"; 
echo "<td id=\"tablehader\" >"; echo "DATE/TIME-ЗАКАЗА"; echo "</td>"; 
echo "<td id=\"tablehader\" >"; echo "N-ДОКУМЕНТОВ"; echo "</td>"; 
echo "<td id=\"tablehader\" >"; echo "N-СТРАНИЦ"; echo "</td>";
echo "<td id=\"tablehader\" >"; echo "ИЗУЧИТЬ ЗАКАЗ"; echo "</td>";
echo "<td id=\"tablehader\" >"; echo "ПЕЧАТЬ ЗАКАЗА"; echo "</td>";
echo "</tr>";

@$get1 = $_GET["name"];

$out1 = select_zakaz();
echo '<pre>';
echo '</pre>';

foreach ($out1 as $item) {    	

$f1 = $item['zId'];
$f2 = $item['zDate'];




    echo "<tr>";
    echo "<td id=\"tabletext\">"; echo $f1; echo "</td>";
    echo "<td id=\"tabletext\">"; echo $f2; echo "</td>"; 
    echo "<td id=\"tabletext\">"; echo select_n_doc($f2); echo "</td>";
    echo "<td id=\"tabletext\">"; echo number_part3($f2);; echo "</td>";
	echo "<td id=\"tabletext\">"; echo "<a id=\"button\" rel=\"shadowbox[Mixed]\" href=\"../01_zakazDocs.php"; echo "?id=";  echo $f2; echo "\" target=\"_self\">изучить документы</a>"; echo "</td>"; 
	echo "<td id=\"tabletext\">"; 
	
	echo "<a target=\"_blank\" id=\"button2\" href=\"../01_zakazPrint.php"; echo "?id=";  echo $f2; echo "\" target=\"_self\">печатать</a>"; 
	echo "<a target=\"_self\" id=\"button\" href=\"../00_delete_zakaz.php"; echo "?id=";  echo $f1; echo "\" target=\"_self\">удалить </a>"; 
	
	echo "</td>"; 
	echo "</tr>";    
}

echo "</table>";
?>

<a id="all" class="basic" href="00_new_record.php" target="_self">[NEW RECORD]</a>


<br />
<br />

<!-- <input type="submit" value="ВЫПОЛНИТЬ ЗАКАЗ"> -->



   


   
   
    
</form>



</body>
</html>

