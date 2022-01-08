<?php
session_start();
if(!isset($_SESSION['enroll']))
{
    header("Location:http://localhost/Placement_Cell/login.html");
}
include 'connection.php';
$query= $_POST['query'];
$q="$query";
$r=mysqli_query($conn,$q);
$num = mysqli_num_rows($r);
?>
<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="../css/query.css">
    </head>
    <body>
        <table>
           <?php 
            $i = 0;
            while ($i < mysqli_num_fields($r))
             {
                 $fld = mysqli_fetch_field_direct($r, $i);
                 $myarray[]=$fld->name;
                 $i = $i + 1;
             }
            ?>
            <tr>
                <?php
                foreach($myarray as $col){?>
                <th>
                    <?php echo $col;?>
                </th>
                <?php } ?>
            </tr>
            <?php
            while($row = mysqli_fetch_row($r))
{ ?>
            <tr>
                <?php
                foreach($row as $column){?>
                <td>
                    <?php echo $column;}?>
                </td>
            </tr><?php } ?>
        </table> 
    </body>
</html>

    
