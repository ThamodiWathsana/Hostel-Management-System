<?php
$con=mysqli_connect("localhost:3306","dseuser","123","hosteldb");

if ($con->connect_error)
 {
    die("Connection failed: " . $con->connect_error);
}

$UID=$_POST["txtUserID"];
$fName=$_POST["txtUserFName"];
$LName=$_POST["txtUserLName"];
$address=$_POST["txtAddress"];
$email=$_POST["txtEmail"];
$ContactNo=$_POST["txtPhone"];


$sql = "INSERT INTO user(userId,First_Name,Last_Name,Address,Email,Contact_Number) VALUES('$UID','$fName','$LName','$address','$email','$ContactNo')";

if ($con->query($sql) === TRUE)
 {
     header('Location:formroom.php');
 }   
else 
{
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();


?>