<html>
<head>
<title>Home</title>
<style>

li {padding-top:5px;margin-top:5px;margin-right:30px;list-style:none;height:44px;border-radius:5px;}
span {color:red;}
table {width:800px;box-shadow:8px 5px 5px grey;cursor:pointer;margin-left:250px;}
table,td {padding:8px;border:0.5px solid lightgrey;border-collapse:collapse;text-align:center;}
tr {font-size:17px;background-color:lightgrey;}
input {height:40px;width:250px;border-radius:2px;text-align:center;border-width:1px;font-size:15px;}
#sub:hover {color:white;background-color:green;}
.x {height:15px;width:15px;margin-left:20px;}
#g {font-size:25px;color:black;background-color:lightgrey;}
button {height:40px;width:180px;font-size:16px;border-radius:5px;}
button:hover {background-color:lightsteelblue;color:red;}
div button {height:200px;width:200px;border-radius:20px;float:left;margin-left:50px;margin-top:50px;background-color:lightblue;}
#f {height:40px;width:250px;background-color:white;border-style:solid;border-color:black;border-width:1px;font-size:30px;}
#d {height:40px;width:250px;background-color:white;border-style:solid;border-color:black;border-width:1px;font-size:30px;}
select {height:40px;width:250;font-size:25px;padding-left:80px;}
option {height:40px;width:250;font-size:25px;padding-left:20px;}
.y {cursor:pointer;}
textarea {text-align:center;}
body {background-color:darkgrey;}

</style>
<script>

function first(){
var seats=document.getElementById('s').value;
var fee=seats*5000;
document.getElementById('f').innerHTML=fee;}

function final(){
var s=document.getElementById('s').value;
var f=document.getElementById('fo').value;
var d=document.getElementById('du').value;
var c;
if(f==0){
var total=(s*5000)*d;
document.getElementById('d').innerHTML=total;}
else{var total=(s*5000)*d+2000*d;
document.getElementById('d').innerHTML=total;
}}

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
$sqlr="select*from roomdetails where REGISTRATION='$u'";
$rer=mysqli_query($con,$sqlr);
$c=mysqli_num_rows($rer);
if($c==0){
if(isset($_POST['submit'])){
$ro=$_POST['rn'];
$se=$_POST['sn'];
$da=$_POST['sd'];
$ao=$_POST['am'];
$fo=$_POST['food'];
$cr=$_POST['co'];
$com=$_POST['cd'];
$per=$_POST['pd'];
$cci=$_POST['ccity'];
$pci=$_POST['pcity'];
$du=$_POST['ti'];
$cs=$_POST['cstate'];
$ps=$_POST['pstate'];
$cc=$_POST['ccode'];
$pc=$_POST['pcode'];
$sqlt="insert into roomdetails (ROOM,SEATER,STAYDATE,AMOUNT,COURSE,REGISTRATION,CADDRESS,PADDRESS,CCITY,PCITY,CSTATE,PSTATE,CCODE,PCODE,FOOD,DURATION) values 
('$ro','$se','$da','$ao','$cr','$u','$com','$per','$cci','$pci','$cs','$ps','$cc','$pc','$fo',$du)";
$res=mysqli_query($con,$sqlt);
if($res){
echo "<script>alert('Inserted');</script>";
header('location:booked.php');;
}}}
else{
header('location:booked.php');}
?>

</head>
<body>

<nav style="float:left;height:97%;width:250px;background-color:grey;border-radius:5px;position:fixed;">
<ul>
<li><button onclick="window.location.href='dashboard.php'">Dashboard</button></li>
<li><button onclick="window.location.href='profile.php'">My Profile</button></li>
<li><button onclick="window.location.href='room.php'">My Room</button></li>
<li><button onclick="window.location.href='details.php'">Room Details</button></li>
<li><button onclick="window.location.href='cpassword.php'">Change Password</button></li>
</ul>
</nav>
<center>
<table border="2">
<form method="POST">
<tr><td colspan="2"><h1>Room Registration:</h1></td></tr>
<tr><td><label>Room Number:</label></td><td><input type="number" name="rn" id="r" placeholder="1,2,3,4,5"></td></tr>
<tr><td><label>Seater:</label></td><td><input type="number" name="sn" id="s" placeholder="Number of Seaters" oninput="first();"><p id='fi'></p></td></tr>
<tr><td><label>Fees per month:</label></td><td><center><p id="f"></p></center></td></tr>
<tr><td><label>Food Status:</label></td><td><input type="radio" class='x' name="food" id="fo" value=0>Without Food<input type="radio" class='x' name="food" id="fo" value=1>With Food/Rs:2000<p id="mn"></p></td></tr>
<tr><td><label>Stay from:</label></td><td><input type="date" name="sd"></td></tr>
<tr><td><label>Duration:</label></td><td><input type="number" name="ti" id="du" placeholder="Enter duration in months"  oninput="final();"><p id="mm"></p></td></tr>
<tr><td><label>Total Amount:</label></td><td><center><textarea id="d" name="am"></textarea></center></td></tr>
<tr><td colspan="2"><h1>Personal Info:</h1></td></tr>
<tr><td><label>Course:</label></td><td><select name="co">
<option id="boe" name="x" value="CSE">CSE</option>
<option id="boe"name="x" value="IT">IT</option>
<option id="boe" name="x" value="ECE">ECE</option>
<option id="boe" name="x" value="EEE">EEE</option></select></td></tr>
<tr><td><label>Register Number</label></td><td><input type="tel" class='y' placeholder="<?php echo $re['REGISTRATION'];?>" onclick="window.alert('Update your personal infomation from your profile');"></td></tr>
<tr><td><label>First Name</label></td><td><input type="text" class='y' placeholder="<?php echo $re['FIRSTNAME'];?>" onclick="window.alert('Update your personal infomation from your profile');"></td></tr>
<tr><td><label>Last Name</label></td><td><input type="text" class='y' placeholder="<?php echo $re['LASTNAME'];?>" onclick="window.alert('Update your personal infomation from your profile');"></td></tr>
<tr><td><label>Mobile Number</label></td><td><input type="tel" class='y' placeholder="<?php echo $re['CONTACT'];?>" onclick="window.alert('Update your personal infomation from your profile');"></td></tr>
<tr><td><label>Gender</label></td><td><input type="text" class='y' placeholder="<?php echo $re['GENDER'];?>" onclick="window.alert('Update your personal infomation from your profile');"></td></tr>
<tr><td><label>Email</label></td><td><input type="email" class='y' placeholder="<?php echo $re['EMAIL'];?>" onclick="window.alert('Update your personal infomation from your profile');"></td></tr>
<tr><td><h1>Communication Address</h1></td><td><h1>Permanent Address</h1></td></tr>
<tr><td><textarea rows="6" cols="32" name="cd">Address</textarea></td><td><textarea rows="6" cols="32" name="pd">Address</textarea></td></tr>
<tr><td><label>City:</label><br/><input type="text" name="ccity"></td><td><label>City:</label><br/><input type="text" name="pcity"></td></tr>
<tr><td><label>State:</label><br/><input type="text" name="cstate"></td><td><label>State:</label><br/><input type="text" name="pstate"></td></tr>
<tr><td><label>Pincode:</label><br/><input type="tel" name="ccode"></td><td><label>Pincode:</label><br/><input type="tel" name="pcode"></td></tr>
<tr><td colspan="2"><input type="submit" name="submit" value="Register" id="sub"></td></tr>
</form>
</table>
</center>

</body>
</html>