<?
include('00_db_fns.php');

$st1 = $_GET['id'];

?>
<html>
<head>
<title><? echo $st1;?></title>
</head>

</html>


<?
$out1 = number_3_3($st1); 
$count = 0;
$in1 = "<img src=\"logo.png\" width=\"150\"><br>"; 

foreach ($out1 as $item)
{
	foreach ($item as $item2)
		{
			echo $in1;
			echo "<img src=\"files/".$item2[0]."\" width=\"\" height=\"900\">";
			$count++;
		}
}
?>

<!--
<div style="width: 900px; height: 1272px; background-repeat:no-repeat; background-position:center; background-image:url(files/document_2015-01-14_13-58-10_54b667e29672a.jpg);">
-->
</div>