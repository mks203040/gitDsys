<?php
include('00_db_fns.php');

?>

<!DOCTYPE HTML>
<html>
<head>
<script>function myFunction() {alert("ЗАКАЗ ВЫПОЛНЕН!");}</script>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="template_modal/shadowbox.css">
<link rel="stylesheet" type="text/css" href="css.css">
<script type="text/javascript" src="template_modal/shadowbox.js"></script>
<script type="text/javascript">
Shadowbox.init();
</script>



	<title>DSYS / Документы пакета</title>

	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" />
    <meta http-equiv="content-type" content="text/html" charset="utf-8"/>
    


</head>


<body>
<? 
$st1 = $_GET['id'];
echo $st1;
?>

<div id="line3">
<div id="line3a">
<h1>
ДОКУМЕНТЫ В ЗАКАЗЕ "<? echo $st1 ?>"
</h1>
</div>
</div>


<?
echo "<table>";
echo "<tr id=\"tablehader\" class=\"one\"> "; 
echo "<td id=\"tablehader\" >"; echo "№"; echo "</td>";
echo "<td id=\"tablehader\" >"; echo "ДАТА"; echo "</td>"; 
echo "<td id=\"tablehader\" >"; echo "ТИП <br>"; echo "</td>"; 
echo "<td id=\"tablehader\" >"; echo "ID - ДОКУМЕНТА"; echo "</td>"; 
echo "<td id=\"tablehader\" >"; echo "СТРАНИЦЫ"; echo "</td>"; 
echo "<td id=\"tablehader\" >"; echo "РЕДАКТИРОВАТЬ"; echo "</td>";
echo "</td>";

// FOREACH 
// 






$fin1 = number_2_fin($st1);
// print_r($fin1);



foreach ($fin1 as $item) {
   
    echo "<tr>";
	echo "<td id=\"tabletext\">";  echo $item[0][0]; echo "</td>";	//1 N
    echo "<td id=\"tabletext\">"; echo $item[0][1]; echo "</td>";	//2 data 
    echo "<td id=\"tabletext\">"; echo $item[0][5]; echo "</td>";	//3 tip 
    echo "<td id=\"tabletext\">"; echo $item[0][3]; echo "</td>";	//4 id - doc
		$var1 = $item[0][1]; $memo = fotki($var1); $memo2 = count($memo);
    echo "<td id=\"tabletext\">"; echo $memo2; echo "</td>";		//5
    echo "<td id=\"tabletext\">"; 
   	
   	if ($memo2 == 0) 
   	{
   	echo "нет изображений";
   	}
   	else
   	{
echo "<a id=\"button2\" rel=\"shadowbox[Mixed]\" href=\"01_img.php";
echo "?idDoc=";
echo $item[0][1];   
echo "\" target=\"_blank\">просмотр</a>"; 
	}	
echo "</td>";	
// count and preview - edn 	echo "</tr>";    
}
	echo "</table>";

?>



</body>
</html>

