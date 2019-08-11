<?php
session_start();
ob_start();
if(!$_SESSION['myid']){
  header("Location: index.php");
  }

require_once 'config.php';
if(isset($_POST['update'])){

$previous = $_POST['previous'];
$id = $_POST['id'];
$current = $_POST['current'];

$sql = "UPDATE `client` SET `current_reading` = '$current', `previous_reading`= '$previous' WHERE `Id` = '$id'";

if (mysqli_query($conn, $sql)) {
 echo "Record updated successfully";
header('location:search.php');
}
else {

    $_SESSION["errorp"] = "Error Updating Record";
    header("Location: search.php");
 }
}

    $_SESSION["errorp"] = "Wrong Password or Email";
    header("Location: index.php");
mysqli_close($conn);
 ?>