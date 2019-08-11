<?php
ob_start();
include_once '../config.php';
$id =$_GET['id'];
// sql query for deleting data from database

mysqli_query($conn,"DELETE FROM `client` WHERE `Id` ='$id'" ) or die(mysqli_error());
$_SESSION['msg'] = "User deleted succesfully";
header("location:home.php");

?>