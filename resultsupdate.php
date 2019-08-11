<?php
session_start();
ob_start();
if(!$_SESSION['myid']){
  header("Location: index.php");
  }

include_once ("config.php");
require("header.php");
if(isset($_POST['read'])){
  $metern = $_POST['meterno'];

  $result = mysqli_query($conn,"SELECT * FROM client WHERE meterno = '$metern' ");
if(mysqli_num_rows($result) > 0){

while($row = mysqli_fetch_assoc($result)) {

?>

<div class="w3-container w3-card-4 w3-">
  <h2>Update</h2>
</div>
  <br>

   <div class="w3-container">
   <div class="w3-card-2 w3-margin">
  <div class="w3-white">
<table class="w3-table">
<tr>
    <td><b>Name</b></td><td>
<?php
  echo $row['fname'];
  ?>
 &nbsp;
    <?php
  echo $row['sname'];
  ?>
    </td>
  </tr>
  <tr>
    <td><b>Meter Number</b></td>
   <td>
<?php
  echo $row['meterno'];
  ?>
</td>
  </tr>
  <tr>
    <td><b>Status</b></td>
    <td>
<?php
  echo $row['status'];
  ?>
</td>
  </tr>
  <tr>
    <td><b>Previous Reading</b></td>
    <td>
<?php
  echo $row['current_reading'];
  ?>
</td>
  </tr>
  </table>
<p>
<form method="post" class="w3-container" action="update.php">
<input type="text" name="id" value="<?php echo $row['Id']; ?>" class="w3-hide">
<input type="text" value="<?php
  echo $row['current_reading'];
  ?>" class="w3-hide" name="previous">

<label class="w3-label w3-text-green"><b>Current Reading</b></label>
<input class="w3-input w3-border w3-sand" name="current" placeholder ="Meter reading" type="number">

  <p><input type="submit" class="w3-btn w3-round w3-green" name="update" value="update"></p>
</form>
    </div>
     </div>
  </div>
  <br>
  <div class="w3-card-2 w3-green">
<footer>
  <h2>Pruh</h2>
  COPYRIGHT &COPY; 2019
  </footer>
</div>
</body>
</html>
<?php
}
  }else{
  $_SESSION["errors"] = "no results found";
header("Location: search.php");
  "no results Found";
  }
}else{
  $_SESSION["errors"] = "no results found";
header("Location: search.php");
  }
?>