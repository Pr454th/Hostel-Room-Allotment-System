<html>
<head>
<title>redirect</title>
<style>

body {background-color:lightsalmon;}
table {width:500px;height:100px;box-shadow:8px 5px 5px grey;cursor:pointer;margin-top:120px;}
table,td {padding:8px;border:0.5px solid lightskyblue;border-collapse:collapse;text-align:center;}
tr {font-size:17px;background-color:lightskyblue;}
input {height:30px;width:200px;border-radius:5px;text-align:center;}
#sub:hover {color:white;background-color:green;}

</style>

<?php

if(isset($_POST['submit'])){
include('config.php');
$n=$_POST['num'];
$sql="select*from users where CONTACT='$n';";
$result=mysqli_query($con,$sql);
$c=mysqli_num_rows($result);
$re=mysqli_fetch_array($result);
if($c>0){
echo "<script>alert('Password:".$re['PASSWORD']."');</script>";
echo "<script>alert('Change your password after login');</script>";}
else{
echo "<script>alert('Invalid:Mobile Number');</script>";}}

?>

</head>
<body>
<center>
<table border="2">
<form method="POST">
<h1>Password Retrieving:</h1>
<tr><td><label>Mobile Number:</label></td><td><input type="tel" name="num" placeholder="Enter Number"></td></tr>
<tr><td colspan="2"><input type="submit" name="submit" id="sub"></td></tr>
<tr><td><a href="login.php">login</a></td><td></td></tr>
</form>
</table>
</center>
</body>
</html>