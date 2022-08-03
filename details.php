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
alert('You can't update your details here');}

</script>
<?php
session_start();
?>

<?php

include('config.php');
$u=$_SESSION['rgt'];
$sql="select*from users where REGISTRATION='$u'";
$result=mysqli_query($con,$sql);
$ru=mysqli_fetch_array($result);
$sqlr="select*from roomdetails where REGISTRATION='$u'";
$rer=mysqli_query($con,$sqlr);
$rd=mysqli_fetch_array($rer);
$ce=mysqli_num_rows($result);
$c=mysqli_num_rows($rer);
if(($ce>0)&&($c>0)){}
else{
header('location:unregister.php');}
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
<tr><td colspan="2"><h1>Room Details:</h1></td></tr>
<tr><td><label>Room Number:</label></td><td><input type="number" name="rn" id="r" placeholder="<?php echo $rd['ROOM'];?>" onclick="window.alert('Update your room details in My room');"></td></tr>
<tr><td><label>Seater:</label></td><td><input type="number" name="sn" id="s" placeholder="<?php echo $rd['SEATER'];?>" onclick="window.alert('Update your room details in My room');"></td></tr>
<tr><td><label>Food Status:<br/><p>0-Withoutfood</p><p>1-Withfood</p></label></td><td><input type="number" name="food" id="fo" placeholder="<?php echo $rd['FOOD'];?>" onclick="window.alert('Update your room details in My room');"></td></tr>
<tr><td><label>Stay from:</label></td><td><input type="text" name="sd" placeholder="<?php echo $rd['STAYDATE'];?>" onclick="window.alert('Update your room details in My room');"></td></tr>
<tr><td><label>Duration:</label></td><td><input type="number" name="ti" id="du" placeholder="<?php echo $rd['DURATION'];?>" onclick="window.alert('Update your room details in My room');"></td></tr>
<tr><td><label>Total Amount:</label></td><td><input type="tel" placeholder="<?php echo $rd['AMOUNT'];?>" onclick="window.alert('Update your room details in My room');"></td></tr>
<tr><td colspan="2"><h1>Personal Info:</h1></td></tr>
<tr><td><label>Course:</label></td><td><input type="text" name="co" placeholder="<?php echo $rd['COURSE'];?>"></td></tr>
<tr><td><label>Register Number</label></td><td><input type="tel" class='y' placeholder="<?php echo $ru['REGISTRATION'];?>" onclick="window.alert('Update your personal infomation from your profile');"></td></tr>
<tr><td><label>First Name</label></td><td><input type="text" class='y' placeholder="<?php echo $ru['FIRSTNAME'];?>" onclick="window.alert('Update your personal infomation from your profile');"></td></tr>
<tr><td><label>Last Name</label></td><td><input type="text" class='y' placeholder="<?php echo $ru['LASTNAME'];?>" onclick="window.alert('Update your personal infomation from your profile');"></td></tr>
<tr><td><label>Mobile Number</label></td><td><input type="tel" class='y' placeholder="<?php echo $ru['CONTACT'];?>" onclick="window.alert('Update your personal infomation from your profile');"></td></tr>
<tr><td><label>Gender</label></td><td><input type="text" class='y' placeholder="<?php echo $ru['GENDER'];?>" onclick="window.alert('Update your personal infomation from your profile');"></td></tr>
<tr><td><label>Email</label></td><td><input type="email" class='y' placeholder="<?php echo $ru['EMAIL'];?>" onclick="window.alert('Update your personal infomation from your profile');"></td></tr>
<tr><td><h1>Communication Address</h1></td><td><h1>Permanent Address</h1></td></tr>
<tr><td><p>Address</p><input type="text" placeholder="<?php echo $rd['CADDRESS'];?>"></td><td><p>Address</p><input type="text" placeholder="<?php echo $rd['PADDRESS'];?>"></td></tr>
<tr><td><label>City:</label><br/><input type="text" name="ccity" placeholder="<?php echo $rd['CCITY'];?>" onclick="window.alert('Update your address in My room');"></td><td><label>City:</label><br/><input type="text" name="pcity" placeholder="<?php echo $rd['PCITY'];?>" onclick="window.alert('Update address details in My room');"></td></tr>
<tr><td><label>State:</label><br/><input type="text" name="cstate" placeholder="<?php echo $rd['CSTATE'];?>" onclick="window.alert('Update your address in My room');"></td><td><label>State:</label><br/><input type="text" name="pstate" placeholder="<?php echo $rd['PSTATE'];?>" onclick="window.alert('Update address details in My room');"></td></tr>
<tr><td><label>Pincode:</label><br/><input type="tel" name="ccode" placeholder="<?php echo $rd['CCODE'];?>" onclick="window.alert('Update your address in My room');"></td><td><label>Pincode:</label><br/><input type="tel" name="pcode" placeholder="<?php echo $rd['PCODE'];?>" onclick="window.alert('Update address details in My room');"></td></tr>
<tr><td colspan="2"><input type="button" onclick="window.print();" value="print" id="sub"></td></tr>
</form>
</table>
</center>

</body>
</html>