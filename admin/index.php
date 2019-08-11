<?php
session_start();
if(isset($_SESSION['adminid'])){
  header("Location: home.php");
  }
?>
<!DOCTYPE html>
<html>
<title>login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/w3css.css">
<body>

<div action="#" class="w3-card-4">

<div class="w3-container w3-green">
  <h2>Sign In</h2>
</div>
  <br>
  <div class="w3-card-2">
<form method="post" class="w3-container" action="login.php">
<?php
  if(isset($_SESSION['error'])){
    ?>
<div class="w3-text-red w3-alert">
    <h5><?php echo $_SESSION['error'];
      unset($_SESSION['error']);
      ?></h5>
    </div>
  <?php
    }
  ?>
<p>
<label class="w3-label w3-text-green"><b>Email</b></label>
<input class="w3-input w3-border w3-sand" required name="email" type="text"></p>

<p>
<label class="w3-label w3-text-green"><b>Password</b></label>
<input class="w3-input w3-border w3-sand" required name="pword" type="password"></p>

<p>
<input type="submit" class="w3-btn w3-green" name="login" value="Login"></p>

</form>
    </div>
  </div>
  <br>
  <div class="w3-card-2 w3-green">
<footer>
  <h2>KEWASCO</h2>
  COPYRIGHT @COPY; 2019
  </footer>
</div>
</body>
</html>