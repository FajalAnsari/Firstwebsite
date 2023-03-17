<?php  
 include("connection.php");
 if(isset($_POST['submit'])){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$age=$_POST['age'];
$clg=$_POST['clg'];
$result=mysqli_query($conn,"INSERT INTO `user_data`(`fname`, `lname`, `age`, `clg`) VALUES ('$fname','$lname','$age','$clg')");
if($result)
{
    header("location:index.php");
}else{
    echo "error";
}
 }

?>