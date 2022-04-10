<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Management System</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <link rel="stylesheet" href="control/style.css">
    <link rel="stylesheet" href="control/header.css">

</head>
<body>

<?php include_once 'view/header.php'; ?>

<section class="home" id="home">

<div class="content">
    <h1>welcome <span>food</span> lovers</h1>
    <p>Enrich your taste with us!</p>
    <a href="#"><button class="btn">get started</button></a>
</div>

<div class="shape"></div>

</section>

<section class="about" id="about">

<h1 class="heading"> <span> about us </span> </h1>

<div class="row">

    <div class="content">
        <h3>lets satisfy your hunger with our tasty dishes</h3>
        <p>Everyone has a favorite restaurant that he or she loves to eat at. The best restaurant to go to in Altoona is The Olive Garden. This peaceful place has the most delicious food for all the Italian food lovers out there. The Olive Garden is the most exquisite place to eat and is truly the finest restaurant in town.
            Every time I walk in to the Olive Garden I obtain the best feeling. No matter how many times I come, I always love to observe what is around me. Each and every comforting smile the employees have on their faces and the soft Italian music playing, always makes me feel relaxed. When I breathe in the aroma of the Italian food, it always reminds me of how hungry I am. The uniquely textured walls produce a smooth yet flowing look. It is almost as I am in a famous building in Italy. The viny plants that clasp to the walls ever so freely give it a natural appearance. The marble tiled floor beneath me gives the restaurant a clean yet warm appearance.
            The host's kind and gentle eyes look at their customers and politely ask for the number of the party attending and the smoking preference they prefer. They have soft cushion seats that let my body sink right down in them. I always notice the quiet atmosphere around me. This makes everyone's mood ever so noticeable. The Olive Garden always seems to have the most friendly customers. The windows that surround the tables present an open feeling, almost as if I was eating outside.</p>
        <p>hen the food is brought, I can always feel the chilled salad plate being handed to me. The crispy garden salad that is lightly coated with ranch dressing and not to mention those thin, round, red onions that I particularly dislike. Somewhere around me there always lay a deep burgundy color glass of the Red Wine, or a soft pale crystal like glass of White Zinfandel. I can always smell the hot bread sticks, which lay patiently beside the creamy alf</p>
        <a href="#"><button class="btn">learn more</button></a>
    </div>

    <div class="image">
        <img src="images/main-chef.jpg" alt="">
    </div>

</div>
</section>

<section class="dish" id="dish">

<h1 class="heading"> <span> popular dishes </span> </h1>

<ul class="controls">
    <li class="buttons button-active" data-filter="all">all</li>
    <li class="buttons" data-filter="sandwich">sandwich</li>
    <li class="buttons" data-filter="cake">cake</li>
    <li class="buttons" data-filter="juice">juice</li>
    <li class="buttons" data-filter="chocolate">chocolate</li>
</ul>

<div class="image-container">

    <div class="image sandwich">
        <img src="images/sandwich1.jpg" alt="">
        <a href="#">sandwich</a>
    </div>
    <div class="image sandwich">
        <img src="images/sandwich2.jpg" alt="">
        <a href="#">sandwich</a>
    </div>
    <div class="image sandwich">
        <img src="images/sandwich3.jpg" alt="">
        <a href="#">sandwich</a>
    </div>

    <div class="image cake">
        <img src="images/cake1.jpg" alt="">
        <a href="#">cake</a>
    </div>
    <div class="image cake">
        <img src="images/cake2.jpg" alt="">
        <a href="#">cake</a>
    </div>
    <div class="image cake">
        <img src="images/cake3.jpg" alt="">
        <a href="#">cake</a>
    </div>

    <div class="image juice">
        <img src="images/juice1.jpg" alt="">
        <a href="#">juice</a>
    </div>
    <div class="image juice">
        <img src="images/juice2.jpg" alt="">
        <a href="#">juice</a>
    </div>

    <div class="image chocolate">
        <img src="images/chocolate.jpg" alt="">
        <a href="#">chocolate</a>
    </div>

</div>
</section>

<section class="chef" id="chef">

<h1 class="heading"> <span> expert chefs </span> </h1>

<div class="box-container">

    <div class="box">
        <img src="images/chef1.jpg" alt="">
        <div class="info">
            <h3>Sakib Islam</h3>
            <span>head chef</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-pinterest"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-twitter"></a>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="images/chef2.png" alt="">
        <div class="info">
            <h3>Anamika Sarkar Tuli</h3>
            <span>head chef</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-pinterest"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-twitter"></a>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="images/chef3.jpg" alt="">
        <div class="info">
            <h3>Sakib Islam</h3>
            <span>head chef</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-pinterest"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-twitter"></a>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="images/chef4.jpg" alt="">
        <div class="info">
            <h3>Sakib Islam</h3>
            <span>head chef</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-pinterest"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-twitter"></a>
            </div>
        </div>
    </div>

</div>
</section>


<section class="speciality" id="speciality">

<h1 class="heading"> <span> our speciality </span> </h1>

<div class="box-container">

    <div class="box">
        <img src="images/img1.jpg" alt="">
        <div class="info">
            <h3>tasty hamburger</h3>
            <p>upto 25% discount</p>
            <a href="#"><button class="btn"> check out </button></a>
        </div>
    </div>

    <div class="box">
        <img src="images/img2.jpg" alt="">
        <div class="info">
            <h3>fresh bearkfast</h3>
            <p>upto 25% discount</p>
            <a href="#"><button class="btn"> check out </button></a>
        </div>
    </div>

    <div class="box">
        <img src="images/chef3.jpg" alt="">
        <div class="info">
            <h3>veg sandwich</h3>
            <p>upto 25% discount</p>
            <a href="#"><button class="btn"> check out </button></a>
        </div>
    </div>

    <div class="box">
        <img src="images/img4.jpg" alt="">
        <div class="info">
            <h3>delicious pizza</h3>
            <p>upto 25% discount</p>
            <a href="#"><button class="btn"> check out </button></a>
        </div>
    </div>

</div>

<div class="icons-container">

    <div class="icons">
        <i class="fas fa-shipping-fast"></i>
        <h3>fast delivery</h3>
        <p>We frovide fast delivery</p>
    </div>

    <div class="icons">
        <i class="fas fa-tags"></i>
        <h3>heavy discounts</h3>
        <p>You can see our great deals and discounts!</p>
    </div>

    <div class="icons">
        <i class="fas fa-hand-holding-usd"></i>
        <h3>money returns</h3>
        <p>If you don't like the quality of food we will return your money. So 100% moneyback guarantee!!</p>
    </div>

    <div class="icons">
        <i class="fas fa-headset"></i>
        <h3>24 x 7 support</h3>
        <p>If you have any query feel free to call or message us!</p>
    </div>

</div>
</section>



<section class="order" id="order">

<h1 class="heading"> <span> order now </span> </h1>

<form action="">

    <div class="inputBox">
        <input type="text" placeholder="full name">
        <input type="text" placeholder="food name">
    </div>

    <div class="inputBox">
        <input type="number" placeholder="phone number">
        <select name="" id="">
            <option value="food type" disabled selected>food type</option>
            <option value="veg">veg</option>
            <option value="non-veg">non-veg</option>
        </select>
    </div>

    <div class="inputBox">
        <textarea cols="30" rows="10" placeholder="full address"></textarea>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7301.563352264296!2d90.40472650153993!3d23.79078760326323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7a677640c67%3A0x909689b7c2d2ca9e!2sPinewood%20Cafe%20%2B%20Kitchen%20(Banani)!5e0!3m2!1sen!2sbd!4v1637251679757!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <input type="submit" value="order now" class="btn">

</form>
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
            <p>We are providing the best quality food in this town. You can get 24*7 hours support for any query/help with 100% moneyback guarantee! Who else do this in town?</p>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script src="js/script.js"></script>


</body>
</html>