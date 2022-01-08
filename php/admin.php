<?php
session_start();
if(!isset($_SESSION['enroll']))
{
    header("Location:http://localhost/Placement_Cell/login.html");
}
include 'connection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>admin page</title>
        <meta http-equiv="Cache-control" content="no-cache">
        <link rel="stylesheet" href="../css/home.css">
    </head>
    <body>
        <div id="d1">
            <span id="s1">Enroll-No: <label id="l1"> <?php echo $_SESSION['enroll'];?> </label> </span>
            <span id="s2">Hi <label id="l2"> <?php echo " ".$_SESSION['name']."(admin)";?>  </label></span>
            <span id="s3"><a href="logout.php" >Logout</a></span>
            <span id="s4"><label id="l3">Placement officer:</label> Dr. Shraddha Masih (9826489123)</span>
            <img id="img" src="../img/davv.jpg">
        </div>
        <div id="d2">
            <form action="admin_update.php" method="post" >
            <table id="t2">
                <tr>
                    <th>Company</th>
                    <th><input  type="text" placeholder="company name" name="cname"  required/></th>
                </tr>
                <tr>
                    <th>Role</th>
                    <th><input  type="text" placeholder="job profile" name="role"  required/></th>
                </tr>
                <tr>
                    <th>ctc</th>
                    <th><input  type="text" placeholder="ctc in lpa" name="ctc"  required/></th>
                </tr>
                <tr>
                    <th>oncampus<input  type="radio" name="campus" value="oncampus" required /></th>
                    <th>offcampus<input  type="radio" name="campus" value="offcampus" required/></th>  
                </tr>
                <tr>
                    <th>date</th>
                    <th><input  type="text" placeholder="date of drive" name="date"  required/></th>
                </tr>
                <tr>
                    <th colspan="2"><input type="submit" value="update" /></th>
                </tr>
                <tr>
                    <th colspan="2"><input type="reset" /></th>
                </tr>
            </table>
            </form>
             <form action="query.php" method="post" id="d3">
            <table id="t1">
                <tr>
                    <th >Query</th>
                    <th ><input id="in1" type="text" placeholder="write your query without ; ex: select * from user" name="query"  required/></th>
                </tr>
                
                <tr>
                    <th colspan="2"><input type="submit" value="result" /></th>   
                </tr>
                <tr>
                    <th colspan="2"><input type="reset" /></th>
                </tr>     
            </table>
            </form>
            
        </div>
        
    </body>
</html>
