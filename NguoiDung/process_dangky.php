<?php
session_start();
include_once('../connectDB.php');
// Data retreived  begins here

$name=$_POST['name'];
$sex=$_POST['gioitinh'];
$email=$_POST['username'];
$password1=$_POST['pass1'];
$password2=$_POST['pass2'];
$date=$_POST['date'];

//echo $password;



$query1="INSERT INTO user (name,username,password,dob,sex) VALUES ('$name','$email','$password1','$date','$sex')";
if($password1==$password2)
    $result1 = mysqli_query($conn,$query1);

if(!$result1){
	echo ("Email đã tồn tại !!");
}
else{
		$_SESSION['id'] = mysqli_insert_id($conn);
			header('location: ../Login/Login.php?msg=registered');
}




















?>
