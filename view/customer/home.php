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
session_start();
$connect = mysqli_connect("localhost", "root", "", "user-registration");

if (isset($_POST["add_to_cart"])) {
    if (isset($_SESSION["food"])) {
        $item_array_id = array_column($_SESSION["food"], "item_id");
        if (!in_array($_GET["id"], $item_array_id)) {
            $count = count($_SESSION["food"]);
            $item_array = array(
                'item_id'            =>    $_GET["id"],
                'item_name'            =>    $_POST["hidden_name"],
                'item_price'        =>    $_POST["hidden_price"],
                'item_quantity'        =>    $_POST["quantity"]
            );
            $_SESSION["food"][$count] = $item_array;
        } else {
            echo '<script>alert("Item Already Added")</script>';
        }
    } else {
        $item_array = array(
            'item_id'            =>    $_GET["id"],
            'item_name'            =>    $_POST["hidden_name"],
            'item_price'        =>    $_POST["hidden_price"],
            'item_quantity'        =>    $_POST["quantity"]
        );
        $_SESSION["food"][0] = $item_array;
    }
}
if (isset($_GET["action"])) {
    if ($_GET["action"] == "delete") {
        foreach ($_SESSION["food"] as $keys => $values) {
            if ($values["item_id"] == $_GET["id"]) {
                unset($_SESSION["food"][$keys]);
                //echo '<script>alert("Item Removed")</script>';
                echo '<script>window.location="cart.php"</script>';
            }
        }
    }
}
?>



<!doctype html>


<html lang="en" class="no-js">

<head>
    <title>Customar order</title>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,300;1,400&family=Zilla+Slab:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/koad-assets.min.css">
    <link rel="stylesheet" type="text/css" href="css/style-home.css">
    <link rel="stylesheet" type="text/css" href="css/btn.css">

</head>

<body>


    <header>

        <div class="header-1">

            <a href="Final Project\index.html" class="logo"> <i class="fas fa-utensils"></i> food </a>

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
                    <li><a href="#customer">Customer</a></li>
                    <li><a href="view/stuff/staff.php">Stuff</a></li>
                    <li><a href="view/admin/login.php">Admin</a></li>
                </ul>
            </nav>


            <div class="phppot-container">
                <div class="page-header">
                    <div class="page-content">Welcome <?php echo $username; ?>
                    </div>
                    <h1><a style="color: yellow;" href="cart.php">Cart</a></h1>
                    <span class="login-signup"><a href="logout.php">Logout</a></span>
                </div>
            </div>
        </div>

        </div>

    </header>
    <section class="menu-section">
        <div class="menu-box pizza-menu">
            <div class="container">
                <div class="title-section">
                    <h2>All Menu</h2>
                    <span>Try the delicious new dishes from our chef.</span>
                </div>
                <div class="row">
                    <?php
                    $query = "SELECT * FROM products ORDER BY id ASC";
                    $result = mysqli_query($connect, $query);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                    ?>
                            <div class="col-md-4">
                                <form method="post" action="home.php?action=add&id=<?php echo $row["id"]; ?>">
                                    <div class="menu-post">
                                        <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
                                            <img src="<?php echo $row["img"]; ?>" alt="img">
                                            <h3><?php echo $row["name"]; ?></h3>
                                            <p><?php echo $row["disc"]; ?></p>
                                            <span class="price">$ <?php echo $row["price"]; ?></span>

                                            <!-- passvalue -->
                                            <input type="text" name="quantity" value="1" class="form-control" />
                                            <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
                                            <input type="hidden" name="hidden_img" value="<?php echo $row["img"]; ?>" />
                                            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="cartBtn" value="Add to Cart" />

                                    </div>
                                </form>
                            </div>
                    <?php
                        }
                    } ?>
                </div>
            </div>
    </section>


    </div>

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