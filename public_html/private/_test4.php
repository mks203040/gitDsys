
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>DSYS.CO/GET</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <link rel="stylesheet" href="css/styles.css?v=1.0">
</head>
<body>

<?php include('00_db_fns.php'); echo '<pre>';


//$filename = 'files/' . '150210(01,2,kruszwica)-01(01,150206).jpg';
//unlink($filename);



function foreachDeleteFiles($get)
{
    db_connect();  
//  $sql2 = $mysql_query("DELETE FROM photos WHERE idlib='$get'; "); 
    $query = "SELECT libfile FROM photos WHERE photos.idlib = '$get' ";
//  $query = "SELECT libfile FROM photos WHERE photos.idlib = '150218(01,2,kruszwica)' ";
    $result = mysql_query($query);
    $result = db_result_to_array($result);
    foreach ($result as $filename) {
    	$filenameFull = 'files/' . $filename[];
		unlink($filenameFull);    	
    }
    echo 'FILES ARE DELETED';
    return $result;
    
}

$get = '150210(01,2,kruszwica)'; 
$return = foreachDeleteFiles($get); // print_r($return);


// $get = '150218(01,2,kruszwica)'; $echo = foreachImgNames($get); print_r ($echo); 





echo '</pre>'; ?>



</body>
</html>