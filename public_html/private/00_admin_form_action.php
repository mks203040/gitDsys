<?
echo '00_admin_form_action.php';
include('00_db_fns.php');

print_r($_POST);

if (isset($_POST['id']))
{
$in0 = $_POST['id'];
$in1 = $_POST['date'];
$in2 = $_POST['document'];
$in3 = $_POST['type']; 
update_row($in0, $in1, $in2, $in3);
	header ('location: 01_admin-form.php?idDoc=' . $in0);
}
else 
{
echo ('no updated'); 
}

?>