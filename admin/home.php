<?php
session_start();
ob_start();
if(!$_SESSION['adminid']){
  header("Location: index.php");
  }
?>
<?php
require ("header.php");
?>

<br>
<?php
if(isset($_SESSION['msge'])){
  ?>
<div class="w3-red w3-round w3-card-2">
  <h5><?php echo $_SESSION['msge']; ?>
    </h5>
 </div>

<?php
  unset($_SESSION['msge']);
  }
if(isset($_SESSION['msgs'])){
  ?>
<div class="w3-green w3-round w3-card-2">
  <h5><?php echo $_SESSION['msgs']; ?>
    </h5>
 </div>

<?php
  unset($_SESSION['msgs']);
  }
?>
<br>
  <div class="w3-container">
    <div class="w3-margin">
<div class="w3-card-2 w3-container w3-round">
  <br>
 <center> Employees </center>
  <button>
    <a href="adduser.php">Add</a></button>
 <button>
   <a href="viewuser.php">Edit</a></button>
<br><br>
 </div>
<br>
  <div class="w3-card-2 w3-round w3-container">
    <br>
 <center> Clients </center>
  <button><a href="addclient.php">Add</a></button>
 <button><a href="viewclient.php">Edit</a></button>

    <br><br>
    </div>
 </div>
</div>
  <br>
  <div class="w3-card-2 w3-green">
<footer>
  <h2>water</h2>
  COPYRIGHT &COPY; 2019
  </footer>
</div>
</body>
</html>