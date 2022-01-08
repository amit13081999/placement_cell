<?php
session_start();
include 'connection.php';
$enroll = $_POST['enroll'];
$password = $_POST['password'];
$query1 = "select enroll,password,admin from user where enroll='$enroll' && password='$password' ";
$result=mysqli_query($conn,$query1);
$num = mysqli_num_rows($result);
if($num == 1)
{ 
    $_SESSION['enroll'] = $enroll;
    $query2="select name from user where enroll='$enroll'";
    $result1=mysqli_query($conn,$query2);
    $name = mysqli_fetch_row($result1);
    $_SESSION['name'] = $name[0];
    $row = mysqli_fetch_array($result);
    if($row['admin'] == 'yes')
    {
    header('Location: http://localhost/Placement_Cell/php/admin.php');
    }
    else
    {
        header('Location: http://localhost/Placement_Cell/php/home.php');  
    }
}
else
{ 
?>    
<script>
 alert("wrong credentials");  
 window.location.replace("../login.html");    
</script>  
<?php
}
?>
<html>
    <head>
        <meta http-equiv="Cache-control" content="no-cache">
    </head>
</html>



