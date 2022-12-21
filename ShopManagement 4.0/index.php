<?php
session_start();
$_SESSION['message']="You must login first!";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Home</title>
</head>

<body>
    <div class="container">
        <div class="header_section">
            <div class="header_content">
                <a href="index.php">
                    <img src="images/LogoHead.png" alt="Logo">
                </a>
                <h1></h1>
            </div>
        </div>
        <div class="navSection">
            <div class="logo">
                <a href="index.php">
                    <img src="images/logo.png" alt="Logo">
                </a>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="View/logincustomer.php">Products</a></li>
                    <li><a href="View/aboutus.php">About</a></li>
                    <li><a href="View/contactus.php">Contact</a></li>
                    <li><a href="View/login.php">Account</a></li>
                </ul>
            </nav>
        </div>
        <div class="content_section">
            <div class="row">
                <div class="col-1">
                    <h1>Give your workout <br> a new style!</h1>
                    <p>Success isn't always about greatness. It's about consistency. Consistent <br>hard work gain
                        success.
                        Greatness will come.</p>
                    <a href="#explore" class="btn">Explore Now &#10141</a>
                </div>
                <div class="col-1">
                    <img src="images/image1.png" alt="">
                </div>
            </div>
            <!-- featured categories -->
            <div class="row">
                <div class="col-2">
                    <img src="images/category-1.jpg" alt="">
                </div>
                <div class="col-2">
                    <img src="images/category-2.jpg" alt="">
                </div>
                <div class="col-2">
                    <img src="images/category-3.jpg" alt="">
                </div>
            </div>
            <div class="row">
                <div class="title">
                    <h3>Featured Products</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <img src="images/product-1.jpg" alt="">
                    <h5>Red printed T-shirt</h5>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>$50.00</p>
                </div>
                <div class="col-3">
                    <img src="images/product-2.jpg" alt="">
                    <h5>Sprint Men's Sneakers</h5>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>$90.00</p>
                </div>
                <div class="col-3">
                    <img src="images/product-3.jpg" alt="">
                    <h5>Slim Fit Chino Pants</h5>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>$80.00</p>
                </div>
                <div class="col-3">
                    <img src="images/product-4.jpg" alt="">
                    <h5>Puma Navy Blue T-shirt</h5>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>$55.00</p>
                </div>
            </div>

            <div class="row title_align">
                <div class="title">
                    <h3>Latest Products</h3>
                </div>
            </div>
            <section id="explore">
                <div class="row">
                    <div class="col-3">
                        <img src="images/product-4.jpg" alt="">
                        <h5>Puma Navy Blue T-shirt</h5>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <p>$55.00</p>
                    </div>
                    <div class="col-3">
                        <img src="images/product-5.jpg" alt="">
                        <h5>SPRINT Men's Slip On Shoe</h5>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <p>$190.00</p>
                    </div>
                    <div class="col-3">
                        <img src="images/product-6.jpg" alt="">
                        <h5>Black T-shirt</h5>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>$40.00</p>
                    </div>
                    <div class="col-3">
                        <img src="images/product-7.jpg" alt="">
                        <h5>Linear 3 Pairs Socks</h5>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <p>$70.00</p>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <img src="images/product-8.jpg" alt="">
                            <h5>Fossil Black Metal Strap Watch</h5>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <p>$110.00</p>
                        </div>
                        <div class="col-3">
                            <img src="images/product-1.jpg" alt="">
                            <h5>Red printed T-shirt</h5>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <p>$50.00</p>
                        </div>
                        <div class="col-3">
                            <img src="images/product-9.jpg" alt="">
                            <h5>Leather Strap Watch</h5>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <p>$92.00</p>
                        </div>
                        <div class="col-3">
                            <img src="images/product-10.jpg" alt="">
                            <h5>Men's Flyknit Sneaker</h5>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <p>$85.00</p>
                        </div>
                        <div class="col-3">
                            <img src="images/product-11.jpg" alt="">
                            <h5>Men's Sport Shoe</h5>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <p>$145.00</p>
                        </div>
                        <div class="col-3">
                            <img src="images/product-2.jpg" alt="">
                            <h5>Sprint Men's Sneakers</h5>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <p>$90.00</p>
                        </div>
                        <div class="col-3">
                            <img src="images/product-3.jpg" alt="">
                            <h5>Slim Fit Chino Pants</h5>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>$80.00</p>
                        </div>
                        <div class="col-3">
                            <img src="images/product-4.jpg" alt="">
                            <h5>Puma Navy Blue T-shirt</h5>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <p>$55.00</p>
                        </div>
                    </div>
                </div>
        </div>
        </section>


        <div class="footer">
            <div class="footer_content">
                <div class="footer-col-1">
                    <h3>Branch 1</h3>
                    <p>Shop: 839- 840 Level: 8, Computer City
                        Center (Multiplan), New Elephant Road,
                        Dhaka-1205, Bangladesh</p>
                </div>
                <div class="footer-col-2">
                    <h3>Branch 2</h3>
                    <p>Shop: 437- 438 Level: 4, Computer City
                        Center (Multiplan), New Elephant Road,
                        Dhaka-1205, Bangladesh</p>
                </div>
                <div class="footer-col-3">
                    <img src="images/Logoimg.png" alt="">
                    <p>Our Purpose Is To Sustainably Make The Pleasure and Benefits Of Sports Accessible to the many
                    </p>
                </div>
                <div class="footer-col-4">
                    <h3>Information</h3>
                    <ul>
                        <li>About us</li>
                        <li>Delivery</li>
                        <li>Payment Terms</li>
                        <li>Privacy Policy</li>
                        <li>Refund and Return</li>
                        <li>Terms and Condition</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>