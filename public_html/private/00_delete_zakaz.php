<?
include('00_db_fns.php');

// 00_delete_get.php?id=$id

$id = $_GET['id'];
delete_zakaz($id);

// header ('location: 01_zakazi/01_zakazi.php');

echo "<script> window.location.replace('01_zakazi/01_zakazi.php') </script>";


?>