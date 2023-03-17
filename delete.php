<?php
include("connection.php");
$id=$_GET['id'];
$query = "DELETE FROM `user_data` WHERE name='$id'";
mysqli_query($conn,$query);
if($data)
{
    echo "<script>alert('Record Delete form database')</script>";
}else{
    echo "<script>alert('Failed to Record Delete form database')</script>";
}
    
?>