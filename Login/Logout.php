<?php
session_start();
// remove all session variables
if(!isset($_SESSION['id']))
{
  header('location: Login.php?msg=please_login');
}
unset($_SESSION["id"]);
//session_unset();
unset($_SESSION["name"]);
// destroy the session
session_destroy();

header('location:../NguoiDung/Trangchu.php?msg=success_logout');

?>
