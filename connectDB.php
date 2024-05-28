<?php
    $servername = "localhost";
    $db = "webproj";
    $username = "root";
    $password = "";
    global $conn;
    $conn = mysqli_connect($servername,$username,$password);
   if(!$conn){
    die('Kết nối không thành công!');
   }
   mysqli_select_db($conn,$db);
?>