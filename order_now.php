<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W restaurant.ps</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/all.min.css">

</head>
<body>
<div class="header">
    <div class="navbar">
        <div class="container">
            <div class="logo"><i class="fa-solid fa-utensils"></i>
                W restaurant.ps
            </div>

            <div class="nav">

                <ul class="list">
                    <li class="list_item">
                        <p style="padding-right: 100px; color: var(--seccolor);">
                            Welcome
                            <?php echo $_SESSION['username']?>;
                        </p>
                    </li>
                    <li class="list_item">
                        <a href="#Service" class="link_nav">Services</a> </li>
                    <li class="list_item">
                        <a href="#about" class="link_nav">About</a> </li>
                    <li class="list_item">
                    <li class="list_item">
                    <li class="list_item">
                        <a href="#portfolio" class="link_nav">Dishes</a> </li>

                    <a href="#menu" class="link_nav">Menu</a> </li>

                    <a href="#order" class="link_nav">Order</a> </li>
                    <li class="list_item">
                        <a href="contact.html" target="_blank" class=link_nav>Contact</a> </li>

                </ul>

            </div>

        </div>
    </div>
</div>
<div class="order" id="order">

    <h2 class="sub-heading"> Order Now </h2>

    <span class="line"></span>
<div class="container">

 <?php  echo" <form action='order_confirmation.php?user={$_SESSION['username']}' method='post'> ";?>

        <div class="inputBox">
            <div class="input">
                <span>Your Name</span>
                <input type="text" placeholder="enter your name ..." name="name">
            </div>
            <div class="input">
                <span>Your Number</span>
                <input type="number" placeholder="enter your number ..." name="phone">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>Date And Time</span>
                <input type="datetime-local" name="date">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>Your Address</span>
                <textarea name="address" placeholder="enter your address ..." id="" cols="30" rows="10" ></textarea>
            </div>
            <div class="input">
                <span>Your Message</span>
                <textarea name="msg" placeholder="enter your message ..." id="" cols="30" rows="10" ></textarea>
            </div>
        </div>

        <input type="submit" value="Confirm Your Order" name="order" class="btn">

    </form>
</div>
</div>

</body>
</html>