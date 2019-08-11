<?php
session_start();
ob_start();
if(isset(!$_SESSION['adminid'])){
  header("Location: index.php");
  }
?>
<?php
require("header.php");
?>
<br>
<form class="w3-container" action="process.php" method="post">

<p>
<label class="w3-label w3-text-green"><b>First Name</b></label>
<input class="w3-input w3-border w3-sand" name="fname" required type="text"></p>

<p>
<label class="w3-label w3-text-green"><b>Surname</b></label>
<input class="w3-input w3-border w3-sand" name="sname" required type="text"></p>

<p>
<label class="w3-label w3-text-green"><b>Gender</b></label>
<select required name="gender">
<option value="male">Male</option>
<option value="female">Female</option>
</select>
</p>

<p>
<label class="w3-label w3-text-green"><b>Email</b></label>
<input class="w3-input w3-border w3-sand" required name="email" type="email"></p>

<p>
<label class="w3-label w3-text-green"><b>Phone Number</b></label>
<input class="w3-input w3-border w3-sand" required name="phoneno" type="tel"></p>

<p>
<label class="w3-label w3-text-green"><b>Work Id</b></label>
<input class="w3-input w3-border w3-sand" required name="workid" type="text"></p>


<p>
<label class="w3-label w3-text-green"><b>Department</b></label>
<input class="w3-input w3-border w3-sand" required name="department" type="text"></p>

<p>
<label class="w3-label w3-text-green"><b>Password</b></label>
<input class="w3-input w3-border w3-sand" required name="password" type="password"></p>


<p>
<label class="w3-label w3-text-green"><b>confirm Password</b></label>
<input class="w3-input w3-border w3-sand" required name="confirm_password" type="password"></p>

<p>
<input type="submit" class="w3-btn w3-round w3-green" name="adduser" value="Register"></p>
<p>
<input type="reset" class="w3-btn w3-round w3-green" value="clear"></p>

</form>
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