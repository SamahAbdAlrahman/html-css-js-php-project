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

$name=$_POST['name'];

$sql = "DELETE FROM meals WHERE name ='$name'";

if(mysqli_query($conn,$sql)){
    echo"New Record Has been added";
    header('Location:admin.php');
}
else{
    echo "Error Data";
}