<?php
include 'connection.php';
session_start();
$stid=$_GET['artid'];
$sql2="UPDATE `stud_reg` SET `status`='approved' WHERE `stid`='$stid'";
if(mysqli_query($connection,$sql2))
{
    header("location:http://localhost/Magazine/Verifier/Vdashboard.php");
}
?>

