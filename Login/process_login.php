<?php
ob_start();
include_once('../connectDB.php');
global $conn;  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
    $username = $_POST["username"];
    $password = $_POST["password"];
    $result=mysqli_query($conn,"Select * from user where username='$username' and password='$password'");
    $row=mysqli_fetch_assoc($result);
    var_dump($row);
    if($row){
        session_start();
        $_SESSION['id']=$row['id'];
        $_SESSION['name']=$row['name'];
        //echo $_SESSION['name'];
        header("location: ../NguoiDung/TimViec.php");
    }
    else
        echo '<p style="color:red">Email hoặc mật khẩu không chính xác!</p>'; 
}
?>