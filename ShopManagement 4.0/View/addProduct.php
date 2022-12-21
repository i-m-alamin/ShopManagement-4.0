<?php
session_start();
require "../Control/db_connect.php";
$name=$price=$image="";
$name_error=$price_error=$image_error="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{

    if(isset($_POST['submit']))
    {
        $add=0;
        $name=$_POST["name"];
        $price=$_POST["price"];
        $image=$_POST["image"];
        if(empty($_POST["name"]))
        {
            $name_error="You must enter product name"; $add=1;
        }
        if(empty($_POST['price']))
        {
            $price_error = "You must enter price"; $add=1;
        }
        if(empty($_POST['image']))
        {
            $image_error = "You must enter image link"; $add=1;
        }
    
    if ($add==0)
    {
        echo "hi";
        $product_add_sql = $conn->prepare("INSERT INTO product (name, price, image) VALUES (?,?,?)");
        $product_add_sql->bind_param("sis", $name, $price, $image);
        $product_add_sql_res=$product_add_sql->execute();
        if($product_add_sql_res)
        {
            $_SESSION['message']="Successfully signed up!";
            header ("location: productListInfo.php");
            $conn->close();
        }


        // $product_add_sql="INSERT INTO product ('name', price, 'image') VALUES ('".$name."' , '".$price."' , '".$image."')";
        // // if (mysqli_query($conn, $product_add_sql) == TRUE)
        // if($conn->query($product_add_sql)==TRUE)
        // {
        //     header ("location: productListInfo.php");
        // }
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/edit_cus_info.css">
    <script>
    function goBack() {
        window.history.back();
    }
    </script>
    <title> Add new products</title>
</head>

<body>

    <div class="content_section">
        <div class="header_content">
            <a href="../index.php">
                <img src="../images/LogoHead.png" alt="Logo">
            </a>

        </div>
    </div>

    <div class="header">
        <h3>Edit product info</h3>
    </div>
    <div class="formbox">
        <form action="" method='POST'>
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <label for="">Products name</label><br>
            <input type="text" name="name" value="<?php echo $name;?>" autofocus><br>
            <span id="userError" class="errorMsg"><?php echo $name_error ?></span><br>

            <label for="">Product price</label> <br>
            <input type="text" name="price" value="<?php echo $price;?>"><br>
            <span id="fullnameError" class="errorMsg"><?php echo $price_error ?></span><br>

            <label for="">Image</label> <br>
            <input type="text" name="image" value="<?php echo $image?>"><br>
            <span id="addressError" class="errorMsg"><?php echo $image_error ?></span><br>
            <input type="submit" name="submit" value="Add" class="btn"><br><br>
            <a href="AdminPanel.php"><input name="back" class="btn" type="button" value="Back"></a>
        </form>
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
</body>

</html>