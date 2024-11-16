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
$price=$_POST['price'];
$image=$_POST['image'];
$sql="INSERT INTO meals(price,name,rating,img_name) VALUES ('$price','$name','0','$image')";
if(mysqli_query($conn,$sql)){
    echo"New Record Has been added";
    header('Location:admin.php');
}
else{
    echo "Error Data";
}