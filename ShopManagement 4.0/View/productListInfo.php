<?php
session_start();
require "../Control/db_connect.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/product_list_info.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <title>Product list</title>
</head>

<body>


    <div class="container">
        <div class="header_section">
            <div class="header_content">
                <a href="index.php">
                    <img src="../images/LogoHead.png" alt="Logo">
                </a>
                <h1></h1>
            </div>
        </div>

        <div class="navSection">
            <div class="logo">
                <a href="index.php">
                    <img src="../images/logo.png" alt="Logo">
                </a>
            </div>

            <nav>
                <ul>
                    <li><a href="AdminPanel.php">Home</a></li>
                    <li><a href="productListInfo.php">Products</a></li>
                    <li><a href="aboutus.php">About</a></li>
                    <li><a href="contactus">Contact</a></li>
                    <li><a href="../View/login.php">Account</a></li>
                </ul>
            </nav>
        </div>

        <!-- <div class="content_section"> -->

        <div class="row">
            <div class="title">
                <h3>All Products</h3>
            </div>
        </div>
        <div class="row">
            <button type="submit" class="qtybtnadd"><a href="addProduct.php">Add new products</a></button>
        </div>
        <div class="row">

            <div>
            </div>
        </div>
        <div class="content_section">

            <div class="row">
                <?php 
                       
                    $product_list_sql=("SELECT * FROM product");
                    $product_list_res=$conn->query($product_list_sql);
                    if (mysqli_num_rows($product_list_res))
                    {
                    while($row = $product_list_res->fetch_assoc())
                    { ?>
                <!-- <div class="row"> -->

                <div class="col-3">
                    <form action="" method='POST'>
                        <input type="hidden" name="id" value="<?php echo $row['id']?>">
                        <img src="../images/<?php echo $row['image'];?>" alt="">
                        <h5><?php echo $row['name']?></h5>

                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <p>$<?php echo $row['price']?></p>
                        <button type="submit" class="qtybtn"><a
                                href="editProductInfo.php?edit= <?php echo $row['id'] ?>">Edit</a></button>
                        <button type="submit" class="qtybtn"><a
                                href="editProductInfo.php?del=<?php echo $row['id'] ?>">Delete</a></button>
                    </form>
                </div>

                <?php 
                   }
                   mysqli_close($conn);
}?>
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