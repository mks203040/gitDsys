<?
include('00_db_fns.php');

$name = $_GET['name'];

	switch ($name) {
	
    case '>0':
    	$out = '1';
        echo "1";
        row_insert($out); 
        break;
        
    case '=1':
    	$out = '1';
        echo $out;
        row_insert($out);
        break;
    case '=2':
    	$out = '2';
        echo $out;
        row_insert($out);
        break;
    case '=3':
      	$out = '3';
        echo $out;
        row_insert($out);
        break;
    case '=4':
    	$out = '4';
    	echo 'FINISH!!';
        echo $out;
        row_insert($out);
        break;
    case '=5':
    	$out = '5';
        echo $out;
        row_insert($out);
        break;
    case '=6':
    	$out = '6';
        echo $out;
        row_insert($out);
        break;							
	case '=7':
		$out = '7';
	    echo $out;
	    row_insert($out);
	    break;
	case '=8':
		$out = '8';
	    echo $out;
	    row_insert($out);
	    break;
	case '=9':
		$out = '9';
	    echo $out;
	    row_insert($out);
	    break;
}


echo $name;
row_insert();



header ('location: 01_admin/01_admin.php?name='.$name);


?>