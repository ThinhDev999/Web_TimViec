<?php
require_once 'db.php';
$sql_xoa = "DELETE FROM vieclam WHERE so = '".$_GET['del_id']."'";
$query_xoa = mysqli_query($connect,$sql_xoa);
header("location:../tuyendung.php?page_layout=danhsach");
   
?>
