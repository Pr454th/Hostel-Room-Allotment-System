<html>
<head>
<title>Home</title>
<style>

li {padding-top:5px;margin-top:5px;margin-right:30px;list-style:none;height:44px;border-radius:5px;}
span {color:red;}
table {width:800px;box-shadow:8px 5px 5px grey;cursor:pointer;margin-top:120px;}
table,td {padding:8px;border:0.5px solid lightgrey;border-collapse:collapse;text-align:center;}
tr {font-size:17px;background-color:lightgrey;}
input {height:30px;width:200px;border-radius:5px;text-align:center;}
#sub:hover {color:white;background-color:green;}
button {height:40px;width:180px;font-size:16px;border-radius:5px;}
button:hover {background-color:lightsteelblue;color:red;}
#i {color:darkviolet;}
h1 {color:green;}
div {margin-top:40px;}
body {background-color:darkgrey;}


</style>
<script>

function final(){
var x=document.getElementById('m').value;
var y=document.getElementById('p').value;
if((x=="")||(y=="")){
alert('Ivalid:Email/Password');
}}

</script>

<?php
session_start();
?>

<?php

if(isset($_POST['submit'])){
include('config.php');
$mail=$_POST['mail'];
$pass=$_POST['pcode'];
$sql="select*from users where EMAIL='$mail' and PASSWORD='$pass'";
$re=mysqli_query($con,$sql);
$count=mysqli_num_rows($re);
if($count>0){
$_SESSION['user']=$mail;
header('location:website.php');}
}

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
<center>
<h1 id="i">Info:</h1>
<div>
<h1>Your Room Booking is updated</h1>
<a href="dashboard.php">Home</a>
</div>
</center>
</body>
</html>