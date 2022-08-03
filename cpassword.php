<html>
<head>
<title>Home</title>
<style>

li {padding-top:5px;margin-top:5px;margin-right:30px;list-style:none;height:44px;border-radius:5px;}
span {color:red;}
table {width:800px;box-shadow:8px 5px 5px grey;cursor:pointer;}
table,td {padding:8px;border:0.5px solid lightgrey;border-collapse:collapse;text-align:center;}
tr {font-size:17px;background-color:lightgrey;}
input {height:30px;width:200px;border-radius:5px;text-align:center;}
#sub {background-color:blue;color:white;}
#sub:hover {color:white;background-color:green;}
.x {height:20px;width:20px;margin-left:20px;}
#g {font-size:25px;color:black;background-color:lightgrey;}
button {height:40px;width:180px;font-size:16px;border-radius:5px;}
button:hover {background-color:lightsteelblue;color:red;}
div button {height:200px;width:200px;border-radius:20px;float:left;margin-left:50px;margin-top:50px;background-color:lightblue;}
body {background-color:darkgrey;}


</style>
<script>

function second(){
var n=document.getElementById('n').value;
var c=document.getElementById('c').value;
if(n==c){
document.getElementById('la').innerHTML="Correct";
}
else{
document.getElementById('la').innerHTML="Incorrect";}
}

</script>

<?php
session_start();
?>

<?php

include('config.php');
$u=$_SESSION['rgt'];
$sql="select*from users where REGISTRATION='$u'";
$result=mysqli_query($con,$sql);
$re=mysqli_fetch_array($result);
if(isset($_POST['submit'])){
$ol=$_POST['op'];
$new=$_POST['np'];
$co=$_POST['cp'];
if($re['PASSWORD']==$ol){
$sqlt="update users set PASSWORD='$co' where REGISTRATION='$u';";
$res=mysqli_query($con,$sqlt);
if($res){
echo "Updated";
header('location:cpassword.php');
}}
else{
echo "<script>alert('Incorrect:password');</script>";}}
?>

</head>
<body>

<nav style="float:left;height:100%;width:250px;background-color:grey;border-radius:5px;">
<ul>
<li><button onclick="window.location.href='dashboard.php'">Dashboard</button></li>
<li><button onclick="window.location.href='profile.php'">My Profile</button></li>
<li><button onclick="window.location.href='room.php'">My Room</button></li>
<li><button onclick="window.location.href='details.php'">Room Details</button></li>
<li><button onclick="window.location.href='cpassword.php'">Change Password</button></li>
</ul>
</nav>
<h1>Change Password:</h1>
<center>
<table border="2">
<form method="POST">
<tr><td><label>Old Password:</label></td><td><input type="tel" name="op" id="o"></td></tr>
<tr><td><label>New Password:</label></td><td><input type="password" name="np" id="n"></td></tr>
<tr><td><label>Confirm Password:</label></td><td><input type="password" name="cp" id="c" oninput="second();"><p id="la"></p></td></tr>
<tr><td colspan="2"><input type="submit" name="submit" value="Change Password" id="sub"></td></tr>
</form>
</table>
</center>

</body>
</html>