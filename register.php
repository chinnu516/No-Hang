<?php

$conn=mysqli_connect("localhost","root","root","dikki");
if(!$conn)
{
    echo "Data  base is not connected".mysqli_error();
}
else
{
    echo "connected";
}
$name=$_POST['name'];
$aadhar=$_POST['aadhar'];
$phone=$_POST['phone'];
$comment=$_POST['comment'];
$query="INSERT INTO `register` (name,aadhar,phone,comment) VALUES($name,$aadhar,$phone,$comment)";
$result=mysqli_query($conn,$query);
    if($name==""||$aadhar==""||$phone==""||$comment=="")
    {
        echo "All fields are manditory ";
    }
    else
    {
        echo "You are registered";
    }
?>
     