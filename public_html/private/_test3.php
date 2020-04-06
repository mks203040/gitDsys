
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>DSYS.CO/GROUPBY</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="css/styles.css?v=1.0">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>

<?php

include('00_db_fns.php'); 


function groupby()
{
    db_connect();
    $query = "SELECT php2packname FROM adminTable GROUP BY php2packname";
    $result = mysql_query($query);
    $result = db_result_to_array($result);

    return $result;   
}

echo '<pre>';
$res = groupby();
print_r($res);

echo '</pre>';

?>



</body>
</html>