<?php
session_start();
ob_start();
require_once('../config.php');
if(isset($_POST['login'])){

  $password = $_POST['pword'];
  $email = $_POST['email'];
  echo "pass received";
$sql = "SELECT * FROM `admin` WHERE `email` = '$email'";

$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){

while($row = mysqli_fetch_assoc($result)){
echo $row['password'];

  if($row['password'] == $password ){
    $_SESSION["adminid"] = $row['id'];
header("Location: home.php");

}else{
   $_SESSION['error'] = "Wrong Password or Email";
    header("Location: index.php");
    }

  }
}else{
   $_SESSION['error'] = "Wrong Password or Email";
    header("Location: index.php");
 }
  }else{
     $_SESSION['error'] = "Wrong Password or Email";
    header("Location: index.php");
  }

?>