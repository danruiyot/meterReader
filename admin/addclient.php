<?php
session_start();
ob_start();
if(!$_SESSION['adminid']){
  header("Location: index.php");
  }
?>
<?php
require("header.php");
?>
<form class="w3-container" action="process.php" method="post">

<p>
<label class="w3-label w3-text-green"><b>First Name</b></label>
<input class="w3-input w3-border w3-sand" name="fname" type="text"></p>

<p>
<label class="w3-label w3-text-green"><b>Surname</b></label>
<input class="w3-input w3-border w3-sand" name="sname" type="text"></p>

<p>
<label class="w3-label w3-text-green"><b>Gender</b></label>
<select name="gender">
<option value="male">Male</option>
<option value="female">Female</option>
</select>
</p>


<p>
<label class="w3-label w3-text-green"><b>Email</b></label>
<input class="w3-input w3-border w3-sand" name="email" type="email"></p>

<p>
<label class="w3-label w3-text-green"><b>Location</b></label>
<input class="w3-input w3-border w3-sand" name="location" type="text"></p>


<p>
<label class="w3-label w3-text-green"><b>Status</b></label>
<select name="status">
<option value="Active">Active</option>
<option value="Deactivated">Deactivated</option>
</select>
</p>

<p>
<label class="w3-label w3-text-green"><b>Phone Number</b></label>
<input class="w3-input w3-border w3-sand" name="phoneno" type="tel"></p>

<p>
<label class="w3-label w3-text-green"><b>meter number</b></label>
<input class="w3-input w3-border w3-sand" name="meterno" type="text"></p>


<p>
<input type="submit" class="w3-btn w3-round w3-green" name="addclient" value="Register"></p>
<p>
<input type="reset" class="w3-btn w3-round w3-green" value="clear"></p>

</form>
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