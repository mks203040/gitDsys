<?php
include('00_db_fns.php');


// 00_delete_get.php?id=$id
$get = $_GET['id']; // echo $get . '</br>' . '00_delete_record.php';
foreachDeletePacket($get);
delete_photo($get);
echo 'DELETE COMPLETE';

//redirect home page
// header ('Location: 01_admin/01_admin.php?name=%3E0');

echo "<script> window.location.replace('01_admin/01_admin.php?name=%3E0') </script>";




?>