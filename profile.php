<html>
<head>
<title>Home</title>
<style>

li {padding-top:5px;margin-top:5px;margin-right:30px;list-style:none;height:44px;border-radius:5px;}
span {color:red;}
table {width:800px;box-shadow:8px 5px 5px grey;cursor:pointer;}
table,td {padding:8px;border:0.5px solid lightgrey;border-collapse:collapse;text-align:center;}
tr {font-size:17px;background-color:lightgrey;}
input {height:40px;width:250px;border-radius:2px;text-align:center;border-width:1px;font-size:15px;}
#sub:hover {color:white;background-color:green;}
.x {height:20px;width:20px;margin-left:20px;}
#g {font-size:25px;color:black;background-color:lightgrey;}
button {height:40px;width:180px;font-size:16px;border-radius:5px;}
button:hover {background-color:lightsteelblue;color:red;}
div button {height:200px;width:200px;border-radius:20px;float:left;margin-left:50px;margin-top:50px;background-color:lightblue;}
body {background-color:darkgrey;}


</style>
<script>

function first(){
var f=document.getElementById('f').value;
if(f==""){
document.getElementById('fi').innerHTML="Name is Required";}
else if(!/^[a-zA-Z]+$/.test(f)){
document.getElementById('fi').innerHTML="Only letters are allowed";}
else{
document.getElementById('fi').innerHTML="";}}

function second(){
var l=document.getElementById('l').value;
if(l==""){
document.getElementById('la').innerHTML="Name is required";
}
else if(!/^[a-zA-Z]+$/.test(l)){
document.getElementById('la').innerHTML="Only letters are allowed";}
else{
document.getElementById('la').innerHTML="";}
}

function third(){
var re=document.getElementById('r').value;
if(re==""){
document.getElementById('rg').innerHTML="Register number is required";}
else if(re.length!=6){
document.getElementById('rg').innerHTML="Must contain 6 digits";}
else{
document.getElementById('rg').innerHTML="";}
}

function four(){
var mo=document.getElementById('m').value;
if(/^[a-zA-Z]+$/.test(mo)){
document.getElementById('mn').innerHTML="Only digits are allowed";}
else if(mo.length!=10){
document.getElementById('mn').innerHTML="Must contain 10 digits";}
else{
document.getElementById('mn').innerHTML="";}
}

function five(){
var md=document.getElementById('ma').value;
if(md==""){
document.getElementById('mm').innerHTML="Required:MailID";}
else{document.getElementById('mm').innerHTML="";}
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
$fn=$_POST['fname'];
$ln=$_POST['lname'];
$mo=$_POST['mob'];
$em=$_POST['mail'];
$r=$_POST['reg'];
$ge=$_POST['gen'];
$sqlt="update users set FIRSTNAME='$fn',LASTNAME='$ln',GENDER='$ge',CONTACT='$mo',EMAIL='$em',REGISTRATION='$u' where REGISTRATION='$u';";
$res=mysqli_query($con,$sqlt);
if($res){
echo "<script>alert('Updated');</script>";
header('location:profile.php');
}}
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
<h1>My Profile:</h1>
<center>
<table border="2">
<form method="POST">
<tr><td><label>Register Number</label></td><td><input type="tel" name="reg" id="r" placeholder="<?php echo $re['REGISTRATION'];?>" oninput="third();"><p id="rg"></p></td></tr>
<tr><td><label>First Name</label></td><td><input type="text" name="fname" id="f" value="<?php echo $re['FIRSTNAME'];?>" placeholder="Enter First Name" oninput="first();"><p id='fi'></p></td></tr>
<tr><td><label>Last Name</label></td><td><input type="text" name="lname" id="l" value="<?php echo $re['LASTNAME'];?>" placeholder="Enter Last Name" oninput="second();"><p id="la"></p></td></tr>
<tr><td><label>Mobile Number</label></td><td><input type="tel" name="mob" id="m" value="<?php echo $re['CONTACT'];?>" placeholder="Enter Mobile Number" oninput="four();"><p id="mn"></p></td></tr>
<tr><td><label>Gender</label></td><td><input type="text" name="gen" value="<?php echo $re['GENDER'];?>" ></td></tr>
<tr><td><label>Email</label></td><td><input type="email" name="mail" id="ma" value="<?php echo $re['EMAIL'];?>" placeholder="Enter EmailID" oninput="five();"><p id="mm"></p></td></tr>
<tr><td colspan="2"><input type="submit" name="submit" value="Update" id="sub"></td></tr>
</form>
</table>
</center>

</body>
</html>