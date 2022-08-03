<html>
<head>
<title>Home</title>
<style>

li {padding-top:5px;margin-top:5px;margin-right:30px;list-style:none;height:44px;border-radius:5px;}
span {background-color:red;color:white;font-size:40px;border-radius:7px;}
#suc {background-color:green;color:white;font-size:40px;border-radius:7px;}
table {width:800px;box-shadow:8px 5px 5px grey;cursor:pointer;}
table,td {padding:8px;border:0.5px solid lightgrey;border-collapse:collapse;text-align:center;}
tr {font-size:17px;background-color:lightgrey;}
input {height:30px;width:200px;border-radius:5px;text-align:center;}
.x {height:20px;width:20px;margin-left:20px;}
#g {font-size:25px;color:black;background-color:lightgrey;}
#sub:hover {background-color:green;color:white;}
input:hover {background-color:azure;}
button {height:40px;width:180px;font-size:16px;border-radius:5px;}
button:hover {background-color:lightsteelblue;color:red;}
body {background-color:darkgrey;}

</style>

<script>

function check(){

var x=document.getElementById('pp').value;

var y=document.getElementById('cp').value;

if(x!=y){

document.getElementById('z').innerHTML="Incorrect";}
else{
document.getElementById('z').innerHTML="Correct";}}

function first(){
var f=document.getElementById('f').value;
if(!/^[a-zA-Z]+$/.test(f)){
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


if(isset($_POST['submit'])){
error_reporting(0);
include('config.php');
$fn=$_POST['fname'];
$ln=$_POST['lname'];
$mo=$_POST['mob'];
$ge=$_POST['gen'];
$mai=$_POST['mail'];
$pp=$_POST['pcode'];
$cp=$_POST['ccode'];
$re=$_POST['reg'];
if($fn==""||$fn==""||$ln==""||$mo==""||$ge==""||$mai==""||$pp==""||$cp==""||$re==""){
echo "<span><i>Unsuccessful(fill all the fields)</i></span>";}
if(($pp==$cp)&&(strlen($re)==6)&&($fn!="")&&($ln!="")&&($mo!="")&&($mai!="")&&($re!="")&&($cp!="")){
$sql="insert into users (FIRSTNAME,LASTNAME,REGISTRATION,GENDER,CONTACT,EMAIL,PASSWORD) values ('$fn','$ln','$re','$ge','$mo','$mai','$cp')";
if(mysqli_query($con,$sql)){
echo "<span id='suc'><i>Successfully registered</i></span>";}
else{
echo "Not yet";}}
}

?>

</head>
<body>

<nav style="float:left;height:110%;width:250px;background-color:grey;border-radius:5px;">
<ul>
<li><button onclick="window.location.href='login.php'">User Login</button></li>
<li><button onclick="window.location.href='register.php'">User Registrstion</button></li>
<li><button onclick="window.location.href='admin.php'">Admin Login</button></li>
</ul>
</nav>
<h1>User Registration:</h1>
<center>
<table border="2">
<form method="POST">
<tr><td><label>First Name</label></td><td><input type="text" name="fname" id="f" placeholder="Enter First Name" oninput="first();"><p id='fi'></p></td></tr>
<tr><td><label>Last Name</label></td><td><input type="text" name="lname" id="l" placeholder="Enter Last Name" oninput="second();"><p id="la"></p></td></tr>
<tr><td><label>Register Number</label></td><td><input type="number" name="reg" id="r" placeholder="z z z z z z" oninput="third();"><p id="rg"></p></td></tr>
<tr><td><label>Mobile Number</label></td><td><input type="tel" name="mob" id="m" placeholder="Enter Mobile Number" oninput="four();"><p id="mn"></p></td></tr>
<tr><td><label>Gender</label></td><td><input type="radio" class="x" name="gen" value="male" ><span id="g">Male</span>
<input type="radio" class="x" name="gen" value="female"><span id="g">Female</span></td></tr>
<tr><td><label>Email</label></td><td><input type="email" name="mail" id="ma" placeholder="Enter EmailID" oninput="five();"><p id="mm"></p></td></tr>
<tr><td><label>Password</label></td><td><input type="password" id="pp" name="pcode" placeholder="xxxxxxxxxx"></td></tr>
<tr><td><label>Confirm Password</label></td><td><input type="password" id="cp" name="ccode" placeholder="xxxxxxxxxx" oninput="check();"><p id="z"></p></td></tr>
<tr><td colspan="2"><input type="submit" name="submit" value="Register" id="sub"></td></tr>
</form>
</table>
</center>
</body>
</html>