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
$phone=$_POST['phone'];
$date=$_POST['date'];
$name=$_POST['name'];
$message=$_POST['msg'];
$address=$_POST['address'];
$price=0;
$user=$_GET['user'];
$sql2="SELECT * FROM cart WHERE cart_user='$user'";
$result=mysqli_query($conn,$sql2);
if(mysqli_num_rows($result)>0) {
    while($row=mysqli_fetch_assoc($result)) {
        $price+=$row['meal_price'] * $row['meal_qunatity'];
    }
    }


$sql="INSERT INTO orders (date,price,address,message,user) VALUES ('$date','$price','$address','$message','$user')";
if(mysqli_query($conn,$sql)){
    echo"New Record Has been added";
    $sql3 = "DELETE FROM cart WHERE  cart_user='$user'";

    if(mysqli_query($conn,$sql3)) {
        header('Location:index.php');

    }
}
else{
    echo "Error Data";
}