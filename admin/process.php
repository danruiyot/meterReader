<?php
session_start();
ob_start();
if(!$_SESSION['adminid']){
  header("Location: index.php");
}
require_once('../config.php');
if(isset($_POST['addclient'])){

$status = $_POST['status'];
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$meterno = $_POST['meterno'];
$location = $_POST['location'];
$phoneno = $_POST['phoneno'];
$email = $_POST['email'];
$gender = $_POST['gender'];

$sql = "INSERT INTO `client` (`fname`, `sname`, `meterno`,`location`, `phoneno`, `email`, `gender`, `status`)
VALUES ('$fname', '$sname', '$meterno', '$location', '$phoneno', '$email', '$gender', '$status');";

if (mysqli_query($conn, $sql)) {
$_SESSION['msgs'] = "User added Succefully";
  header('Location: home.php');
} else {
 $_SESSION['msge'] = "Error in adding User";
  header('Location: home.php');
}

mysqli_close($conn);


  }

if(isset($_POST['adduser'])){

$fname =trim($_POST["fname"]);
$sname = trim($_POST["sname"]);
$department = trim($_POST["department"]);
$phoneno = trim($_POST["phoneno"]);
$gender = trim($_POST["gender"]);
$workid = trim($_POST["workid"]);
$email = trim($_POST["email"]);
$password = trim($_POST["password"]);


$sql = "INSERT INTO `user` (`workid`, `fname`, `sname`, `department`, `password`, `email`, `phone_no`, `gender`)
VALUES ('$workid', '$fname', '$sname', '$department', '$password', '$email', '$phoneno', '$gender');";

if (mysqli_query($conn, $sql)) {
  $_SESSION['msgs'] = "New record created successfully";
  header('Location: home.php');
} else {
  $_SESSION['msge'] = "Error in adding Record";
  header('Location: home.php');
}

mysqli_close($conn);


}

?>