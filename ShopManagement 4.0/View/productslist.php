<?php
session_start();
require "../Control/db_connect.php";
$status = "";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/product_list.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Products</title>
</head>

<body>
    <div class="container">
        <!-- <div class="header_section">
            <div class="header_content">
                <a href="../index.php">
                    <img src="../images/LogoHead.png" alt="Logo">
                </a>
                <h1></h1>
            </div>
        </div> -->

        <div class="navSection">
            <div class="logo">
                <a href="../index.php">
                    <img src="../images/logo.png" alt="Logo" width="400" height="500">
                </a>
            </div>

            <nav>
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="productslist.php">Products</a></li>
                    <li><a href="aboutus.php">About</a></li>
                    <li><a href="contactus.php">Contact</a></li>
                    <li><a href="../View/login.php">Account</a></li>
                    <li><a href="my_cart.php"><img src="../images/cart.png" alt=""></a></li>

                </ul>
            </nav>
        </div>

        <!-- <div class="content_section"> -->
        <!-- <div class="content_section">
            <div class="title">
            <p>
            <h5>Welcome, <?php echo $_SESSION["email"]; ?></h5>
            </p>
            </div>
        </div> -->
        <div class="row">
            <div class="title">
                <h3>Featured Products</h3>
            </div>
        </div>

        <div class="row">

            <div class="message_box">
                <?php echo $status; ?>
            </div>
        </div>
        <div class="content_section">

            <div class="row">
                <?php

                $product_list_sql = ("SELECT * FROM product");
                $product_list_res = $conn->query($product_list_sql);
                if (mysqli_num_rows($product_list_res)) {
                    while ($row = $product_list_res->fetch_assoc()) { ?>
                        <!-- <div class="row"> -->

                        <div class="col-3">
                            <form action="cart.php" method="POST">
                                <img src="../images/<?php echo $row['image']; ?>" alt="">
                                <h5 value="<?php echo $row['name'] ?>"><?php echo $row['name'] ?></h5>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <p value="<?php echo $row['price'] ?>">$<?php echo $row['price'] ?></p>

                                <input type="hidden" name="id" value=<?php echo $row['id'] ?>>
                                <input type="hidden" name="item_name" value=<?php echo $row['name'] ?>>
                                <input type="hidden" name="price" value=<?php echo $row['price'] ?>>
                                <!-- <input type="text" placeholder="Quantity" class="qty"> -->
                                <button type="submit" name="add_to_cart" class="qtybtn">Add to cart</button>
                            </form>
                        </div>
                <?php  }
                    mysqli_close($conn);
                } ?>
            </div>
        </div>


        <div class=" row">
            <div class="title">
                <a href="logout.php"><input name="logout" class="btn" type="button" value="Logout"></a>
            </div>
        </div>


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
                    <img src="../images/Logoimg.png" alt="">
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