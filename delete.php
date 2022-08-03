<?php

session_start();

?>

<?php

include "config.php";

$a=$_GET['id'];
echo $a;
$sql="delete from users where REGISTRATION=$a";
$result=mysqli_query($con,$sql);
if($result){
header('location:all.php');}
else{
echo 'Not deleted';}

?>
