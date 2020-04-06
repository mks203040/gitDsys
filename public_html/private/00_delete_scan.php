<?
include('00_db_fns.php');


// 00_delete_get.php?id=$id

$id = $_GET['id'];
delete_photo($id);
header ('location: 01_admin-form.php?idDoc=' . $id);


?>