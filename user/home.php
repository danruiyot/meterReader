<!DOCTYPE html>
<html>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/w3css.css">
<body>

<div action class="w3-card-4">

<div class="w3-container w3-green">
  <h2>Home</h2>
</div>
<ul class="w3-navbar w3-large w3-black w3-left-align">
  <li class="w3-hide-medium w3-hide-large w3-black w3-opennav w3-right">
    <a href="javascript:void(0);" onclick="myFunction()">☰</a>
  </li>
  <li><a href="home.php">Home</a></li>
  <li class="w3-hide-small"><a href="accountinfor.php">Acount information</a></li>
  <li class="w3-hide-small"><a href="bill.php">Bill</a></li>
  <li class="w3-hide-small"><a href="#">log out</a></li>
</ul>

<div id="demo" class="w3-hide w3-hide-large w3-hide-medium">
  <ul class="w3-navbar w3-left-align w3-large w3-black">
    <li><a href="accountinfor.php">Account information</a></li>
    <li><a href="bill.php">Bill</a></li>
    <li><a class="w3-right" href="#">Log out</a></li>
  </ul>
</div>
  </div>
<div class="w3-content">


</div>
  <br>
  <div class="w3-card-2 w3-green">
<footer>
  <h2>KEWASCO</h2>
  COPYRIGHT @COPY; 2019
  </footer>
</div>
<script>
function myFunction() {
    document.getElementById("demo").classList.toggle("w3-show");
}
</script>
</body>
</html>