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
$username=$_POST['uname'];
$password=$_POST['psw'];
$phone=$_POST['phonenumber'];
$email=$_POST['email'];
$sql="INSERT INTO coustmer(username,password,email,phone,user_flag) VALUES ('$username','$password','$email','$phone','0')";
if(mysqli_query($conn,$sql)){
    echo"New Record Has been added";
    $_SESSION['username']=$username;
    header('Location:index.php');
}
else{
    echo "Error Data";
}