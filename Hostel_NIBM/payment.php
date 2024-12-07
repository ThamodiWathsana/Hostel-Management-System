<?php

$con=mysqli_connect("localhost:3306","dseuser","123","hosteldb");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$fn=$_POST["txtFN"];
$noc=$_POST["txtNOC"];
$email=$_POST["txtEmail"];
$pay=$_POST["pay"];
$cn=$_POST["txtCN"];
$cvc=$_POST["txtCVC"];
$em=$_POST["txtEM"];
$ey=$_POST["txtEY"];
$a=$_POST["txtA"];

$sql = "INSERT INTO tblpayment(Full_Name,Name_On_Card,Email_Address,Card_NO,CVC,Expire_Month,Expire_Year,Amount) VALUES('$fn','$noc','$email','$cn','$cvc','$em','$ey','$a')";

if ($con->query($sql) === TRUE) {
        echo "<script>alert('Payment successful!')</script>";


    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
    

$con->close();

?>

