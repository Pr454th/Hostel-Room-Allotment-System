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
if(f==0){
var total=(s*5000)*d;
alert('Total Amount:'+total);
alert('Total amount also gets updated directly');}
else{var total=(s*5000)*d+2000*d;
alert('Total Amount:'+total);
alert('Total amount also gets updated directly');}}

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
$resr=mysqli_fetch_array($rer);
if(isset($_POST['submit'])){
$ro=$_POST['rn'];
$se=$_POST['sn'];
$da=$_POST['sd'];
$ao=$_POST['am'];
$fo=$_POST['food'];
$dr=$_POST['ti'];

if($fo==0){
$ao=($se*5000)*$dr;}
else if($fo==1){
$ao=($se*5000)*$dr+$dr*2000;}
else{
echo "<script>alert('Invalid Entry Number');</script>";}

$cr=$_POST['co'];
$com=$_POST['cd'];
$per=$_POST['pd'];
$cci=$_POST['ccity'];
$pci=$_POST['pcity'];
$cs=$_POST['cstate'];
$ps=$_POST['pstate'];
$cc=$_POST['ccode'];
$pc=$_POST['pcode'];
$sqlt="update roomdetails set ROOM='$ro',SEATER='$se',STAYDATE='$da',AMOUNT='$ao',COURSE='$cr',CADDRESS='$com',PADDRESS='$per',
CCITY='$cci',PCITY='$pci',CSTATE='$cs',PSTATE='$ps',CCODE='$cc',PCODE='$pc',FOOD='$fo',DURATION='$dr' where REGISTRATION='$u'";
$res=mysqli_query($con,$sqlt);
if($res){
header('location:updated.php');
}}

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
<tr><td><label>Room Number:</label></td><td><input type="number" name="rn" id="r" placeholder="1,2,3,4,5" value="<?php echo $resr['ROOM'];?>"></td></tr>
<tr><td><label>Seater:</label></td><td><input type="number" name="sn" id="s" placeholder="Number of Seaters" value="<?php echo $resr['SEATER'];?>" oninput="first();"><p id='fi'></p></td></tr>
<tr><td><label>Food Status:</label><br/><p>0-Withoutfood</p> <p>1-Withfood</p></td><td><input type="tel" name="food" id="fo" value="<?php echo $resr['FOOD'];?>" oninput="final();"></td></tr>
<tr><td><label>Stay from:</label></td><td><input type="date" name="sd" value="<?php echo $resr['STAYDATE'];?>"></td></tr>
<tr><td><label>Duration:</label></td><td><input type="tel" name="ti" id="du" placeholder="Enter duration in months" value="<?php echo $resr['DURATION'];?>" oninput="final();"><p id="mm"></p></td></tr>
<tr><td><label>Total Amount:</label></td><td><input type="text" name="am" id="d" placeholder="<?php echo "Previous:".$resr['AMOUNT'];?>"></td></tr>
<tr><td colspan="2"><h1>Personal Info:</h1></td></tr>
<tr><td><label>Course:</label></td><td><input type="text" name="co" value="<?php echo $resr['COURSE'];?>"></td></tr>
<tr><td><label>Register Number</label></td><td><input type="tel" class='y' placeholder="<?php echo $re['REGISTRATION'];?>" onclick="window.alert('Update your personal infomation from your profile');"></td></tr>
<tr><td><label>First Name</label></td><td><input type="text" class='y' placeholder="<?php echo $re['FIRSTNAME'];?>" onclick="window.alert('Update your personal infomation from your profile');"></td></tr>
<tr><td><label>Last Name</label></td><td><input type="text" class='y' placeholder="<?php echo $re['LASTNAME'];?>" onclick="window.alert('Update your personal infomation from your profile');"></td></tr>
<tr><td><label>Mobile Number</label></td><td><input type="tel" class='y' placeholder="<?php echo $re['CONTACT'];?>" onclick="window.alert('Update your personal infomation from your profile');"></td></tr>
<tr><td><label>Gender</label></td><td><input type="text" class='y' placeholder="<?php echo $re['GENDER'];?>" onclick="window.alert('Update your personal infomation from your profile');"></td></tr>
<tr><td><label>Email</label></td><td><input type="email" class='y' placeholder="<?php echo $re['EMAIL'];?>" onclick="window.alert('Update your personal infomation from your profile');"></td></tr>
<tr><td><h1>Communication Address</h1></td><td><h1>Permanent Address</h1></td></tr>
<tr><td>Address:<br/><input type="text" name="cd" value="<?php echo $resr['CADDRESS'];?>"></td><td>Address<br/><input type="text" name="pd" value="<?php echo $resr['PADDRESS'];?>"></td></tr>
<tr><td><label>City:</label><br/><input type="text" name="ccity" value="<?php echo $resr['CCITY'];?>"></td><td><label>City:</label><br/><input type="text" name="pcity" value="<?php echo $resr['PCITY'];?>"></td></tr>
<tr><td><label>State:</label><br/><input type="text" name="cstate" value="<?php echo $resr['CSTATE'];?>"></td><td><label>State:</label><br/><input type="text" name="pstate" value="<?php echo $resr['PSTATE'];?>"></td></tr>
<tr><td><label>Pincode:</label><br/><input type="tel" name="ccode" value="<?php echo $resr['CCODE'];?>"></td><td><label>Pincode:</label><br/><input type="tel" name="pcode" value="<?php echo $resr['PCODE'];?>"></td></tr>
<tr><td colspan="2"><input type="submit" name="submit" value="Update" id="sub"></td></tr>
</form>
</table>
</center>

</body>
</html>