<?php
session_start();
ob_start();
require_once('config.php');
if(isset($_POST['login'])){

  $password = $_POST['pword'];
  $email = $_POST['email'];
  echo "pass received";
$sql = "SELECT * FROM `user` WHERE `email` = '$email'";

$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){

while($row = mysqli_fetch_assoc($result)){
echo $row['password'];

  if($row['password'] == $password ){
    $_SESSION["myid"] = $row['id'];
    $_SESSION["myname"] = $row['fname'];
header("Location: search.php");
    echo "all is well";

}else{
    $_SESSION["errorl"] = "Wrong Password or Email";
    header("Location: index.php");
    }

  }
}else{
$_SESSION["errorl"] = "Wrong Password or Email";
  header("Location: index.php");
 }
  }

?>