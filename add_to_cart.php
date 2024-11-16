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
$user=$_GET['user'];
$price=$_GET['price'];
$name=$_GET['name'];
$sql2="SELECT * FROM cart";
$quantity=1;
$flag=false;
if(mysqli_query($conn,$sql2)){
    $res=mysqli_query($conn,$sql2);
    while($row=mysqli_fetch_assoc($res)){
        if($row['meal_name']==$name){
            $quantity+=1;
            $flag=true;
        }
    }

    }
if($flag){
    $sql="UPDATE  cart SET meal_qunatity='$quantity' WHERE meal_name='$name' ";

}
else {
    $sql = "INSERT INTO cart(meal_name,meal_qunatity,meal_price,cart_user) VALUES ('$name','$quantity','$price','$user')";
}
if(mysqli_query($conn,$sql)){
    echo"New Record Has been added";
    header('Location:index.php');
}
else{
    echo "Error Data";
}