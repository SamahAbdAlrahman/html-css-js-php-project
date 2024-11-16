
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body style="background-image:url(assets/img/blackworldmab.jpg) ">
<?php

if (isset($_POST['view_orders'])) {

    $Qry = "SELECT * FROM `orders`";
    $db = new mysqli('localhost', 'root', '', 'w_resturant');
    $res = $db->query($Qry);
    for ($i = 0; $i < $res->num_rows; $i++) {

        $row = $res->fetch_object();

        echo "<table style='position:relative; padding-top: 10px;-webkit-text-fill-color: white'>
<tr> <td> name=" . $row->user . "</td>
"
            . "<td> message=" . $row->message . "<td> address=" . $row->address .
            "<td> date=" . $row->date ." </tr>
         </table>";
    }
    $db->close();
} ?>

</body>
</html>


