
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>DSYS.CO/GROUPBY</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

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

  <link rel="stylesheet" href="css/styles.css?v=1.0">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>

<form name='form3' >

<td id="tabletext"><input name="idIn[]" type="checkbox" value="150209(01,2,transvora)"></td>
<td id="tabletext"><input name="idIn[]" type="checkbox" value="150209(01,2,transvora)"></td>

<td id="tabletext"><input name="idIn[]" type="checkbox" value="150209(01,2,transvora)"></td>
<td id="tabletext"><input name="idIn[]" type="checkbox" value="150209(01,2,transvora)"></td>
<td id="tabletext"><input name="idIn[]" type="checkbox" value="150209(01,2,transvora)"></td>
<td id="tabletext"><input name="idIn[]" type="checkbox" value="150209(01,2,transvora)"></td>
<td id="tabletext"><input name="idIn[]" type="checkbox" value="150209(01,2,transvora)"></td>
<td id="tabletext"><input name="idIn[]" type="checkbox" value="150209(01,2,transvora)"></td>

</form>


<a onclick="javascript:checkAll('form3', true);" href="javascript:void();">check all</a>
<a onclick="javascript:checkAll('form3', false);" href="javascript:void();">uncheck all</a>


<?php
include('00_db_fns.php'); 
 
 
 
 
// testing area

echo '<br>' . '<br>' . '<pre>';
//$test1 = number_3_1_new($start); print_r($test1);
//$test2 = number_3_2_new($start2); print_r($test2);
//$test3 = number_3_3_new($start); print_r($test3);
echo '</pre>';




?>





</body>
</html>