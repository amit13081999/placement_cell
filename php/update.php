<?php
session_start();
if(!isset($_SESSION['enroll']))
{
    header("Location:http://localhost/Placement_Cell/login.html");
}
include 'connection.php';
$x=$_SESSION['enroll'];
$company= $_POST['sel1'];
$role = $_POST['sel2'];
$q="select cid from company where cname='$company' && role='$role'  ";
$r=mysqli_query($conn,$q);
$row = mysqli_fetch_row($r);
$y=$row[0];
$query = "insert into placement (enroll,cid) value ('$x',$y)";
$result=mysqli_query($conn,$query);
header("Location:http://localhost/Placement_Cell/php/home.php");
?>