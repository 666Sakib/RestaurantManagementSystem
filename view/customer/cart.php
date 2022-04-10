<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {

    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> Customer Cart</title>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="view/customer/css/style.css">


    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-icons.css" />
    <link rel="stylesheet" href="css/sliders.css" />
    <link rel="stylesheet" href="css/style.css" />


</head>

<header>

    <div class="header-1">

        <a href="#" class="logo"> <i class="fas fa-utensils"></i> food </a>

        <h3 class="call"> <i class="fas fa-phone"></i> call now : +8801533953803 </h3>

    </div>

    <div class="header-2">

        <div id="menu" class="fas fa-hamburger"></div>

        <nav class="navbar">
            <ul>
                <li><a class="active" href="#home">home</a></li>
                <li><a href="#about">about</a></li>
                <li><a href="#dish">dishes</a></li>
                <li><a href="#chef">chef</a></li>
                <li><a href="#speciality">speciality</a></li>
                <li><a href="http://localhost/final-project/view/customer/home.php">Customer</a></li>
                <li><a href="view/stuff/staff.php">Stuff</a></li>
                <li><a href="view/admin/login.php">Admin</a></li>
            </ul>
        </nav>


        <div class="phppot-container">
            <div class="page-header">
                <span class="login-signup"><a href="logout.php">Logout</a></span>
            </div>
            <div class="page-content">Welcome <?php echo $username;
                                                ?>
            </div>
        </div>
    </div>

    </div>

</header>


<div>
    <h1 align="center"> Customer Order list</h1>
    <br>
</div>


<div class="content-wrapper oh">


    <section class="section-wrap shopping-cart">
        <div class="container relative">
            <div class="row">

                <div class="col-md-12">
                    <div class="table-wrap mb-30">
                        <table class="shop_table cart table">
                            <thead>
                                <tr>
                                    <th class="product-name">Order list</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- start here -->
                                <?php
                                $total = 0;
                                if (!empty($_SESSION["food"])) {
                                    foreach ($_SESSION["food"]  as $values) {
                                ?>
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                <a href="#"><?php echo $values["item_name"]; ?></a>
                                            </td>
                                            <td class="product-price">
                                                <span class="amount">$ <?php echo $values["item_price"]; ?></span>
                                            </td>
                                            </td>
                                            <td class="product-price">
                                                <span class="amount"><?php echo $values["item_quantity"]; ?></span>
                                            </td>
                                            <td class="product-subtotal">
                                                <span class="amount">$ <?php
                                                                        $_total = $values["item_quantity"] * $values["item_price"];
                                                                        echo  number_format($_total, 2);
                                                                        $total = $total + $_total;
                                                                        ?></span>
                                            </td>
                                            <td class="product-remove">
                                                <a href="home.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                        ?><?php
                                        }
                                            ?>
                                        <!-- End here -->

                            </tbody>
                        </table>
                    </div>

                    <div class="col-md-6">
                        <div class="cart_totals">
                            <h1 class="heading relative bottom-line full-grey uppercase mb-30">Cart Totals</h1>

                            <table class="table shop_table">
                                <tbody>
                                    <tr class="cart-subtotal">
                                        <th>Cart Subtotal</th>
                                        <td>
                                            <span class="amount"><?php echo number_format($total, 2); ?></span>
                                        </td>
                                    </tr>
                                    <tr class="cart-subtotal">
                                        <th>Delivary Charge</th>
                                        <td>
                                            <span class="amount"><?php
                                                                    if ($total > 0) {
                                                                        echo '$50';
                                                                    } else {
                                                                        echo '0';
                                                                    }
                                                                    ?></span>
                                        </td>
                                    </tr>

                                    <tr class="order-total">
                                        <th>Order Total</th>
                                        <td>
                                            <strong><span class="amount"><?php
                                                                            if ($total > 0) {
                                                                                echo number_format($total + 50, 2);
                                                                            } else {
                                                                                echo '0';
                                                                            }
                                                                            ?>
                                                </span></strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                        <div class="col-md-7">
                            <div class="actions">
                                <div class="wc-proceed-to-checkout">
                                    <a href="checkout.html" class="btn btn-lg btn-dark"><span>Order Now
                                        </span></a>
                                </div>


                            </div>
                        </div>

                    </div>

                </div>


            </div>
    </section>


    <section class="newsletter">

        <h1>newsletter</h1>
        <p>subscribe for latest updates</p>
        <form action="">
            <input type="email" placeholder="enter your email">
            <input type="submit" value="subscribe">
        </form>

    </section>
    <section class="footer">

        <img src="images/shape-top.png" alt="">

        <div class="box-container">

            <div class="box">
                <h3 class="heading"> <span>why choose us?</span> </h3>
                <p>We are providing the best quality food in this town. You can get 24*7 hours support for any
                    query/help
                    with 100% moneyback guarantee! Who else do this in town?</p>
            </div>

            <div class="box">
                <h3 class="heading"> <span>locations</span> </h3>
                <a href="#">Dhaka</a>
                <a href="#">Chittagong</a>
                <a href="#">Barisal</a>
                <a href="#">Sylhet</a>
                <a href="#">Rajshahi</a>
                <a href="#">Cumilla</a>
                <a href="#">Rongpur</a>
            </div>

            <div class="box">
                <h3 class="heading"> <span>quick links</span> </h3>
                <a href="#">home</a>
                <a href="#">about</a>
                <a href="#">dishes</a>
                <a href="#">chef</a>
                <a href="#">speciality</a>
                <a href="#">contact</a>
                <a href="#">login</a>
            </div>

            <div class="box">
                <h3 class="heading"> <span>contact us</span> </h3>
                <p> <i class="fas fa-map-marker-alt"></i> Gulshan, Dhaka-1212, Bangladesh </p>
                <p> <i class="fas fa-envelope"></i> group9restaurant@gmail.com </p>
                <p> <i class="fas fa-globe"></i> www.restaurant.com </p>
            </div>

        </div>

        <h1 class="credit"> created by <span>Group 9</span> | all rights reserved! | </h1>
    </section>


    <script type="text/javascript" src="js/script.js"></script>

    </body>

</html>