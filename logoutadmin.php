<?php
session_start();
?>
<?php

unset($_SESSION['user']);
session_destroy();
header('location:admin.php');

?>