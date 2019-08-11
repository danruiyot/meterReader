<?php
session_start();
ob_start();
if(!$_SESSION['myid']){
  header("Location: index.php");
  }

require("header.php");
?>

<div action="" class="w3-card-4">

<div class="w3-container w3-">
  <h2>Search</h2>
</div>
  </div>
<br>
  <div class="w3-card-2 w3-container">
  <div class="w3-margin ">
  <div class="w3-white">
<form class="w3-" action="resultsupdate.php" method="post">
<?php
  if(isset($_SESSION['error'])){
    ?>
<div class="w3-text-red w3-alert">
    <h5><?php echo $_SESSION['errors'];
      unset($_SESSION['errors']);
      ?></h5>
    </div>
  <?php
    }
  ?>
<p>
<label class="w3-label w3-text-green"><b>Meter Number</b></label>
<input class="w3-input w3-border w3-sand" name="meterno" required placeholder ="Meter Number" type="number"></p>

<p>
<input type="submit" class="w3-btn w3-green" name="read" value="Search"></p>

</form>
  </div>
  </div>
</div>
  <br>
  <div class="w3-card-2 w3-green">
<footer>
  <h2>Pruh</h2>
  COPYRIGHT &copy; 2019
  </footer>
</div>
</body>
</html>