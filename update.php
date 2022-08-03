<?php

session_start();

?>

<?php

include "config.php";

$id=$_GET['id'];
$result=mysqli_query($con,"select*from users where REGISTRATION=$id");
while($res=mysqli_fetch_array($result)){

$fn=$res['FIRSTNAME'];
$ln=$res['LASTNAME'];
$mail=$res['EMAIL'];
$co=$res['CONTACT'];
$gen=$res['GENDER'];
$reg=$id;
$pas=$res['PASSWORD'];
}

?>


<?php
if(isset($_POST['update'])){
$fn=$_POST['fname'];
$ln=$_POST['lname'];
$rg=$_POST['reg'];
$c=$_POST['mob'];
$em=$_POST['mai'];
$pc=$_POST['pcode'];
$gn=$_POST['ge'];
echo $fn;
echo $rg;

include('config.php');
$se=mysqli_query($con,"select*from roomdetails where REGISTRATION=$id");

if($se){
echo "hello";
$result=mysqli_query($con,"update users set FIRSTNAME='$fn',LASTNAME='$ln',EMAIL='$em',CONTACT='$c',GENDER='$gn',PASSWORD='$pc',REGISTRATION='$rg' where REGISTRATION=$id");
$se=mysqli_query($con,"update roomdetails set REGISTRATION='$rg' where REGISTRATION=$id");
}
else{
$result=mysqli_query($con,"update users set FIRSTNAME='$fn',LASTNAME='$ln',EMAIL='$em',CONTACT='$c',GENDER='$gn',PASSWORD='$pc',REGISTRATION='$rg' where REGISTRATION=$id");}
if(($result)&&($se)){
header('location:all.php');}
else if($result){
header('location:all.php');}
else{
echo "Not completed";
}

}
?>

<style>

li {padding-top:5px;margin-top:5px;margin-right:30px;list-style:none;height:44px;border-radius:5px;}
table {width:600px;box-shadow:8px 5px 5px grey;cursor:pointer;margin-top:120px;}
table,td {padding:8px;border:0.5px solid lightgrey;border-collapse:collapse;text-align:center;}
tr {font-size:17px;background-color:lightgrey;}
input {height:30px;width:200px;border-radius:5px;text-align:center;}
#sub:hover {background-color:green;color:white;}
body {background-color:darkgrey;}

</style>

<button><a href="all.php">Home</a></button>
<body>
<center>

<form action="" method="POST">

<h1>Data Updating:</h1>

<table border="1">

<tr><td><label>First Name</label></td><td><input type="text" name="fname" value='<?php echo $fn;?>'></td></tr>
<tr><td><label>Last Name</label></td><td><input type="text" name="lname" value='<?php echo $ln;?>'></td></tr>
<tr><td><label>Registration</label></td><td><input type="tel" name="reg" value='<?php echo $id;?>'></td></tr>
<tr><td><label>Mobile Number</label></td><td><input type="tel" name="mob" value='<?php echo $co;?>'></td></tr>
<tr><td><label>Gender</label></td><td><input type="text" class="x" name="ge" value='<?php echo $gen;?>'></td></tr>
<tr><td><label>Email</label></td><td><input type="email" name="mai" id="ma" value='<?php echo $mail;?>'></td></tr>
<tr><td><label>Password</label></td><td><input type="text" id="pp" name="pcode" value='<?php echo $pas;?>'></td></tr>
</table>
<input type="hidden" name="id" value='<?php echo $_GET['id'];?>'><br/>
<input type="submit" value="update" name='update'>
<input type="reset" value="Clear"/>
<input type="submit" value="print" onclick="window.print()">
</form>
</center>
</body>