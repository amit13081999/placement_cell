<!doctype html>
<?php
session_start();
include 'connection.php';
$enroll= $_POST['enroll'];
$password= $_POST['password'];
$name= $_POST['name'];
$gender= $_POST['gender'];
$phone= $_POST['phone'];
$email= $_POST['email'];
$course= $_POST['course'];
$query1 = "select enroll from user where enroll='$enroll' ";
$result=mysqli_query($conn,$query1);
$num = mysqli_num_rows($result);
if($num == 1)
{ 
?>    
<script>
 alert("user already exists");  
 window.location.replace("../login.html");    
</script>
<?php
}
else
{
$query="insert into user(enroll,password,name,gender,phone,email,course) values ('$enroll','$password','$name','$gender','$phone','$email','$course') ";
mysqli_query($conn,$query);  
}
?>
<script>window.location.replace("../login.html");</script>