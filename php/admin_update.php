<?php
session_start();
if(!isset($_SESSION['enroll']))
{
    header("Location:http://localhost/Placement_Cell/login.html");
}
include 'connection.php';
$cname= $_POST['cname'];
$role= $_POST['role'];
$ctc= $_POST['ctc'];
$campus= $_POST['campus'];
$date= $_POST['date'];
$query = "insert into company (cname,role,ctc,campus,date) value ('$cname','$role',$ctc,'$campus','$date')";
$result=mysqli_query($conn,$query);
header("Location:http://localhost/Placement_Cell/php/admin.php");
?>