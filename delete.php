<?php
include("connection.php");
$roll=$_GET['rn'];
$que="delete from transportation where transportation.route_no='$roll'";
$data=mysqli_query($conn,$que);
if($data)
{
    ?>
    <META HTTP-EQUIV="refresh" CONTENT="0; URL=http://localhost/php/display.php">

    <?php
}
else
{echo "no";}
?>




<a href='delete.php?rn=$result[route_no]' onclick='cdelete()'>delete</a>