<html>
<head>
<title>Home</title>
<style>

li {padding-top:5px;margin-top:5px;margin-right:30px;list-style:none;height:44px;border-radius:5px;}
table {width:800px;box-shadow:8px 5px 5px grey;cursor:pointer;margin-top:120px;}
table,td {padding:8px;border:0.5px solid lightgrey;border-collapse:collapse;text-align:center;}
tr {font-size:17px;background-color:lightgrey;}
input {height:30px;width:200px;border-radius:5px;text-align:center;}
#sub:hover {background-color:green;color:white;}
button {height:40px;width:180px;font-size:16px;border-radius:5px;}
button:hover {background-color:lightsteelblue;color:red;}
body {background-color:darkgrey;}

</style>
<script>

function final(){
var x=document.getElementById('u').value;
var y=document.getElementById('c').value;
if((x=="")||(y=="")){
alert('Ivalid:Username/Passcode');
}}

</script>

<?php

session_start();

?>

<?php

if(isset($_POST['submit'])){
$name=$_POST['user'];
$pass=$_POST['code'];
if(($name=='prasath')&&($pass=='kp101')){
$_SESSION['user']=$name;
header('location:all.php');}}

?>

</head>
<body>

<nav style="float:left;height:100%;width:250px;background-color:grey;border-radius:5px;">
<ul>
<li><button onclick="window.location.href='login.php'">User Login</button></li>
<li><button onclick="window.location.href='register.php'">User Registrstion</button></li>
<li><button onclick="window.location.href='admin.php'">Admin Login</button></li>
</ul>
</nav>
<h1>Administrator:</h1>
<center>
<table border="2">
<form method="POST">

<tr><td>Administrator</td><td><input type="text" name="user" placeholder="User" id="u"></td></tr>
<tr><td>Passcode</td><td><input type="password" name="code" placeholder="Passcode" id="c"></td></tr>
<tr><td colspan="2"><input type="submit" name="submit" value="Log In" id="sub" onclick="final();"></td></tr>
</form>
</table>
</center>
</body>
</html>