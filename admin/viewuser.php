<?php
ob_start();
include_once("../config.php");
$sql = "SELECT * FROM user ORDER BY id DESC";
?>
<?php include("header.php");
?>
<?php

$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){
    // output data of each row
  ?>
<h3>Clients</h3>
<div class="w3-margin">
<div class=" w3-card-2 w3-round">
<div class="w3-container ">
<br>

<table class="w3-table w3-striped w3-border">

<tr>
 <th>Name</th>
  <th>Work Id</th>
  <th>Phone number</th>
<th>Action</th>
</tr>
<tr>
<?php
while($row = mysqli_fetch_assoc($result)){
?>
    <td>
<?php echo $row['fname']; ?>
</td>
    <td><?php echo $row['workid']; ?></td>
    <td><?php echo $row['phone_no']; ?></td>
<td><a href="edituser.php?id=<?php echo $row['id']; ?>" class="w3-btn w3-blue">Edit</a>
</td>
</tr>
<?php
}
?>
</table>
<br>
 </div>
</div>
</div>

<footer class="w3-container w3-green">
  <h5>water</h5>
</footer>

</div>
      <?php
} else {
    echo "no results yet";
}

mysqli_close($conn);
?>
   </div>
    </div>
</body>
</html>