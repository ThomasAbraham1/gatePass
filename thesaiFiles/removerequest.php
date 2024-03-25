<?php
//============================================================================
include "../Includes/conn.php";
session_start();
if(!isset($_SESSION['student'])){
	header('location:logout.php');
}
$sno=$_GET['q'];
$query="DELETE FROM `permission_details` WHERE `sno`= '$sno' AND `status`='PENDING'";
$sql=mysqli_query($conn,$query);
if ($sql) {
	echo "<script>window.location='./studentid.php';</script>";
}
else{
	echo "<script>window.location='./studentid.php';</script>";
}
//============================================================================
?>