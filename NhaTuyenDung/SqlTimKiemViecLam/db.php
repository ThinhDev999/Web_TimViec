<?php
$connect = mysqli_connect('localhost','root','','webproj');
if($connect){
    mysqli_query($connect,"SET NAMES 'UTF8'");
    // echo "KET NOI THANH CONG";
}else{
    echo "ket noi that bai";
}
?>