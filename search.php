<style>

body {background-color:darkgrey;}
table
{
width:100%;
box-shadow:8px 5px 5px grey;
cursor:pointer;
}
table,td
{
padding:11px;
border:0.5px solid lightgrey;
border-collapse:collapse;
text-align:center;
}
tr
{
font-size:17px;
background-color:lightblue;
}

input {height:40px;width:400px;text-align:center;border-radius:5px;font-size:15px;}
label {font-size:20px;color:red;}
#sub {height:40px;width:100px;}
#sub:hover {color:white;background-color:blue;}
</style>


<body>
<a href="all.php">Home</a>
<center>
<form action="" method="POST">

<label>SEARCH:</label><input type="text" name="cmd">
<input type="submit" id="sub" name="submit" value="Continue">

</form>
</center>
<?php
session_start();
?>

<?php
error_reporting(0);
echo "<table border='2'>";

echo "<tr><td>REGISTRATION</td><td>FIRSTNAME</td><td>LASTNAME</td><td>GENDER</td><td>CONTACT</td><td>EMAIL</td><td>PASSWORD</td><td>EDIT</td><td>Delete</td></tr>";

include('config.php');
if($_SESSION['user']){
if(isset($_POST['submit'])){
$a=$_POST['cmd'];
$sql="select*from users where FIRSTNAME='$a' or LASTNAME='$a' or REGISTRATION='$a' or EMAIL='$a' or CONTACT='$a'";

$show=mysqli_query($con,$sql);
$count=mysqli_num_rows($show);

if($count!=0){
while($re=mysqli_fetch_assoc($show))
{
echo "<tr><td>".$re['REGISTRATION']."</td><td>".$re['FIRSTNAME']."</td><td>".$re['LASTNAME']."</td><td>".$re['GENDER']."</td><td>".$re['CONTACT']."</td><td>".$re['EMAIL']."</td><td>".$re['PASSWORD']."</td><td><a href='update.php?id=$re[REGISTRATION]'>Edit</td><td><a href='delete.php?id=$re[REGISTRATION]'>Delete</td></tr>";
}}

echo "</table>";

if($re){
echo "connected";}
}}
?>
</body>