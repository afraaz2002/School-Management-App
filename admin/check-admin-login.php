<?php
session_start();
?>

<?php

$adminID=$_POST["adminid"];
$adminPass=$_POST["adminpass"];

if($adminPass=="admin123")
{
    $_SESSION["admin_name"]=$adminID;
    header("location:admin.php");
}
else{
    header("location:admin-login.php");
}
?>