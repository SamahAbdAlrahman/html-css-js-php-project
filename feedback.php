<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="w_resturant";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Connection Failed".$conn->connect_error);
}
$name=$_POST['n'];
$message=$_POST['message'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$sql="INSERT INTO contact(username,email,phone,message) VALUES ('$name','$email','$phone','$message')";
if(mysqli_query($conn,$sql)){
    echo"New Record Has been added";

    header('Location:index.php');
}
else{
    echo "Error Data";
}