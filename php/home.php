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
        <title>home page</title>
        <meta http-equiv="Cache-control" content="no-cache">
        <link rel="stylesheet" href="../css/home.css">
    </head>
    <body>
        <div id="d1">
            <span id="s1">Enroll-No: <label id="l1"> <?php echo $_SESSION['enroll'];?> </label> </span>
            <span id="s2">Hi <label id="l2"> <?php echo " ".$_SESSION['name'];?>  </label></span>
            <span id="s3"><a href="logout.php" >Logout</a></span>
            <span id="s4"><label id="l3">Placement officer:</label> Dr. Shraddha Masih (9826489123)</span>
            <img id="img" src="../img/davv.jpg">
        </div>
        <div id="d2">
            <span id="s5">Please update your placement status as soon as you get a placement.</span>
            <form action="update.php" method="post" >
            <table>
                <tr>
                    <th>Company</th>
                    <th>
                        <?php
                        $query ="select distinct cname from company";
                           $result = mysqli_query($conn,$query);
                        ?>
                        <select name="sel1" required>
                            <option value="null" selected>select</option>
                        <?php
                           
                           while($row = mysqli_fetch_array($result))
                           {
                              //echo $row['column_name']; // Print a single column data
                              //echo print_r($row);       // Print the entire row data
                            ?>   
                            <option value="<?php echo $row['cname'];?>"><?php echo $row['cname'];?></option>
                        <?php } ?>        
                        </select></th>
                </tr>
                <tr>
                    <th>Role</th>
                    <th><?php
                        $query2 ="select distinct role from company";
                           $result2 = mysqli_query($conn,$query2);
                        ?>
                        <select name="sel2" required>
                            <option value="null" selected>select</option>
                        <?php
                           
                           while($row2 = mysqli_fetch_array($result2))
                           {
                              //echo $row['column_name']; // Print a single column data
                              //echo print_r($row);       // Print the entire row data
                            ?>   
                            <option value="<?php echo $row2['role'];?>"> <?php echo $row2['role']; ?></option>
                            <?php } ?></select> </th>
                </tr>
                <tr>
                    <th colspan="2"><input type="submit" value="update" /></th>
                </tr>
            </table>
        </form>
        </div>
    </body>
</html>







