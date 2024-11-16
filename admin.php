<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Administrator</title>
    <link rel="stylesheet" href="assets/css/style_admin.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>


<div>
    <h3 class="sub-heading" style="margin-left: 45%">View Messages </h3>
    <span class="line"></span>

    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="w_resturant";
    $conn=new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error){
        die("Connection Failed".$conn->connect_error);
    }


    $sql="SELECT * FROM orders";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0) {
        echo"
    <table>
        <tr>
            <th>Number</th>
            <th>Date</th>
            <th>Address</th>
            <th> Total Price</th>
        </tr>";
        while($row=mysqli_fetch_assoc($result)) {
            echo"  <tr>
            <td>{$row["number"]}</td>
            <td>{$row["date"]}</td>
            <td>{$row["address"]}</td>
            <td>{$row["price"]} $</td>

        </tr>";

        }
    }    ?>
</div>

<section class="add-products">

    <form action="add_meal.php" method="POST">
        <table>
            <h3 style="margin-left:450px" >add product</h3>
            <tr> <td><input type="text" required placeholder="enter product name" name="name" maxlength="100" class="box"> </td></tr>
            <tr><td><input type="number" min="0" max="9999999999" required placeholder="enter product price" name="price" class="box">
                </td> </tr>
            <tr> <td>   <input type="text" name="image" placeholder="image_name"  required> </td></tr>
            <tr> <td>   <input type="submit" value="add product" name="add_product" class="btn"> </td></tr>

        </table>
    </form>
</section>
<section class="add-products">

    <form action="delete_meal.php" method="POST">
        <table>

            <tr> <td>   <input type="text" name="name" placeholder="meal name"  required> </td></tr>
            <tr> <td>   <input type="submit" value="add product" name="Delete Meal" class="btn"> </td></tr>

        </table>
    </form>
</section>


<div>
    <h3 class="sub-heading" style="margin-left: 45%">View Messages </h3>
    <span class="line"></span>

    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="w_resturant";
    $conn=new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error){
        die("Connection Failed".$conn->connect_error);
    }


    $sql="SELECT * FROM contact";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0) {
        echo"
    <table>
        <tr>
            <th>username</th>
            <th>email</th>
            <th>phone</th>
            <th>message</th>
        </tr>";
        while($row=mysqli_fetch_assoc($result)) {
            echo"  <tr>
            <td>{$row["username"]}</td>
            <td>{$row["email"]}</td>
            <td>{$row["phone"]}</td>
            <td>{$row["message"]} $</td>

        </tr>";

        }
    }

    ?>
</div>


</body>
</html>