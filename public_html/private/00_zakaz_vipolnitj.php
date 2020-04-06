<pre>
<? 
include('00_db_fns.php');

$printr1 = $_POST['idIn'];

//$printr1 = $_POST['idIn'];
print_r ($printr1);



$in1 = date('o-m-d H:i:s');
insert_zakaz($in1);



foreach ($printr1 as $item)
{
	$in2 = $item;
	echo $in2.'<br>';
	
	echo $in2.'<br>';
	insert_zakazscan($in1, $in2);
}

# header ('location: 01_admin/01_admin.php?name=%3E0');
echo "<script> window.location.replace('01_zakazi/01_zakazi.php') </script>";




?>
</pre>