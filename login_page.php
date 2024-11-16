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
$flag=false;
$_SESSION['username']="";
$sql="SELECT * FROM coustmer";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){
while($row = mysqli_fetch_assoc($res)){
    if(isset($_POST['uname']) && isset($_POST['psw']))
    if($username==$row['username'] && $password==$row['password']){
        $_SESSION['username']=$username;
        if($row['user_flag']==0){
        header('Location:index.php');
        }
        else{
            header("Location:admin.php");
        }
        $flag=true;

    }
}
}
else{
header('Location:login.html');
}
if(!$flag){
echo "user not Found";
header('Location:login.html');
}
mysqli_close($conn);

