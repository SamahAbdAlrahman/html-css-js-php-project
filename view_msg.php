<?php
if(isset($_POST['view']))
{

    $Qry="SELECT * FROM `contact`";
    $db=new mysqli('localhost','root','','w_resturant');
    $res=$db->query($Qry);
    for ($i=0;$i<$res->num_rows;$i++)
    {

        $row=$res->fetch_object();

        echo "<table style='position:relative; padding-top: 10px;-webkit-text-fill-color: white'>
<tr> <td> name=".$row->name."</td><td> email=".$row->email."</td><td> phone=".$row->phone."</td>"."<td> message=".$row->message."</td> </tr>
         </table>";
    }
    $db->close();
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body style="background-image:url(assets/img/blackworldmab.jpg) ">

</body>
</html>
