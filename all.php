<html>
<head>
<title>Home</title>
<style>

li {padding-top:5px;margin-top:5px;margin-right:30px;list-style:none;height:44px;border-radius:5px;}
table {width:1000px;box-shadow:8px 5px 5px grey;cursor:pointer;margin-top:120px;}
table,td {padding:8px;border:0.5px solid lightgrey;border-collapse:collapse;text-align:center;}
tr {font-size:17px;background-color:lightgrey;}
input {height:30px;width:200px;border-radius:5px;text-align:center;}
#sub:hover {background-color:green;color:white;}
button {height:40px;width:180px;font-size:16px;border-radius:5px;}
button:hover {background-color:lightsteelblue;color:red;}
body {background-color:darkgrey;}

</style>
<?php
session_start();
?>

</head>
<body>

<h1>Administrator:</h1>
<button onclick="window.location.href='logoutadmin.php'">Log Out</button>
<button onclick="window.location.href='search.php'">Search</button>

<?php
if($_SESSION['user']){
include('config.php');
$sql="select*from users";
$result=mysqli_query($con,$sql);
$c=mysqli_num_rows($result);
echo "<center><table>";
echo "<tr><td>Registeration Number</td><td>Firstname</td><td>Lastname</td><td>Gender</td><td>Contact</td><td>Email</td><td>Password</td><td colspan='2'>Update/Delete</td></tr>";
if($c!=0){
while($re=mysqli_fetch_assoc($result)){
echo "<tr><td>".$re['REGISTRATION']."</td><td>".$re['FIRSTNAME']."</td><td>".$re['LASTNAME']."</td><td>".$re['GENDER']."</td><td>".$re['CONTACT']."</td><td>".$re['EMAIL']."</td><td>".$re['PASSWORD']."</td><td><a href='update.php?id=$re[REGISTRATION]'>Edit</td><td><a href='delete.php?id=$re[REGISTRATION]'>Delete</td></tr>";
}}
echo "</table></center>";}


?>

</body>
</html>