<?php
ob_start();
$id =$_GET['id'];
include_once("../config.php");
$sql = "SELECT * FROM user WHERE id = '$id' ORDER BY id DESC";
?>
<?php
include('header.php');
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){
    // output data of each row
  ?>
<h3>Add results</h3>
<div class="w3-margin">
<div class=" w3-card-2 w3-round">
<div class="w3-container ">
<br>
<form action="process.php" method="post">


<?php
while($row = mysqli_fetch_assoc($result)){
?>
<input type="text" class="w3-hide" name="sid" value="<?php echo $row['id']; ?>">

<p>
<label class="w3-label w3-text-green"><b>First Name</b></label>
<input class="w3-input w3-border w3-sand" name="fname" value="<?php echo $row['fname']; ?>" required type="text"></p>

<p>
<label class="w3-label w3-text-green"><b>Surname</b></label>
<input class="w3-input w3-border w3-sand" name="sname" value="<?php echo $row['sname']; ?>" required type="text"></p>

<p>
<label class="w3-label w3-text-green"><b>Gender</b></label>
<select required name="gender">
<option value="male">Male</option>
<option value="female">Female</option>
</select>
</p>

<p>
<label class="w3-label w3-text-green"><b>Email</b></label>
<input class="w3-input w3-border w3-sand" required name="email" value="<?php echo $row['email']; ?>" type="email"></p>

<p>
<label class="w3-label w3-text-green"><b>Phone Number</b></label>
<input class="w3-input w3-border w3-sand" required name="phoneno" value="<?php echo $row['phone_no']; ?>" type="tel"></p>

<p>
<label class="w3-label w3-text-green"><b>Work Id</b></label>
<input class="w3-input w3-border w3-sand" value="<?php echo $row['workid']; ?>" required name="workid" type="text"></p>


<p>
<label class="w3-label w3-text-green"><b>Department</b></label>
<input class="w3-input w3-border w3-sand" required name="department" type="text" value="<?php echo $row['department']; ?>" ></p>

<p>
<label class="w3-label w3-text-green"><b>Password</b></label>
<input class="w3-input w3-border w3-sand" required name="password" type="password"></p>


<input type="submit" class="w3-btn w3-green" name="update" value="Submit">
<a href="deleteu.php?id=<?php echo $row['id']; ?>" class="w3-btn w3-red">Delete</a>


<?php
}
?>

</form>
<br>
 </div>
</div>
</div>

<footer class="w3-container w3-blue">
  <h5>Footer</h5>
</footer>

</div>
</body>
</html>
<?php
} else {
    echo "no results yet";
}

mysqli_close($conn);
?>