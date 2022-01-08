<!DOCTYPE html>
<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname ="placement";
$conn = mysqli_connect($host,$username,$password,$dbname);
if(mysqli_connect_errno())
{
    die("connection unsuccessfull");
}
?>