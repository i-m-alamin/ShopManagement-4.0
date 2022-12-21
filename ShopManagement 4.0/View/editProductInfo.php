<?php
session_start();
require "../Control/db_connect.php";
$update=true;
$name=$code=$price=$image="";
if(isset($_GET['del']))
{
    $ID= $_GET['del'];
    $product_del_sql="DELETE FROM product WHERE id=$ID";
    // $product_del_sql_result=mysqli_query($conn, $product_del_sql);
    $product_del_sql_result=$conn->query($product_del_sql);
    header("location: productListInfo.php");

}
if (isset($_GET['edit']))
{
    $ID= $_GET['edit'];
    // $update=true;
    // $results=mysqli_query($conn, "SELECT * FROM product WHERE id=$ID");
    $results=$conn->query("SELECT * FROM product WHERE id=$ID");
    if ($results == TRUE)
    {
    //   $n=mysqli_fetch_array($results);
      $n=$results->fetch_array();
      $name=$n['name'];
    //   $code=$n['code'];
      $price=$n['price'];
      $image=$n['image'];
    }
    
    
}
if (isset($_POST['update']))
{      
          $name=$_POST['name'];
        //   $code=$_POST['code'];
          $price=$_POST['price'];
          $image=$_POST['image'];
          mysqli_query($conn, "UPDATE product SET name='$name', code='$code', price='$price', image='$image' WHERE id='$ID'");
          header ('location: productListInfo.php');    
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/edit_product_info.css">
    <title> Edit product info</title>
</head>

<body>

    <div class="content_section">
        <div class="header_content">
            <a href="../index.php">
                <img src="../images/LogoHead.png" alt="Logo">
            </a>

        </div>
    </div>

    <div class="row">
        <button type="submit" class="qtybtnadd">Add new products</button>
    </div>
    <div class="formbox">
        <form action="" method="POST">
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <label for="">Products name</label><br>
            <input type="text" name="name" id="username" value="<?php echo $name;?>" autofocus><br>

            <label for="">Product price</label> <br>
            <input type="text" name="price" id="fullname" value="<?php echo $price;?>"><br>

            <label for="">Image</label> <br>
            <input type="text" name="image" id="address" value="<?php echo $image?>"><br><br>
            <?php if ($update == true): ?>
            <button type="submit" name="update" class="btnupdate">Update</button>
            <?php else:?>
            <?php endif?>
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



    <div align="center" style="margin-top:5%" ;>
        <form action="" method='POST'>
            <fieldset style="width:70%; background-color:#ced6e0;">
                <table align="center" cellspacing="0px" cellpadding="5%"
                    style="margin-top:10px; margin-bottom:40px; width:50%">
                    <tr>
                        <td colspan=3 align="center" style="margin-top:16px; margin-bottom:25px;">
                            <h3 style="margin-top:16px; border-radius:5px; margin-bottom:25px; width:60%; background-color:#f7f1e3;
                                font-family: Arial, Helvetica, sans-serif; padding:5px">Edit
                                product info

                            </h3>
                        </td>
                        <!-- Also add a hidden field to hold the id of the record we will be updating so that it can be recognized in the database uniquely by it's id. -->
                    </tr>


                    <tr>
                        <td style="font-family:Courier, monospace;">Product name</td>
                        <td>:</td>
                        <td> <input
                                style="background-color:#f7f1e3; width:100%; border-radius: 5px; font-family:Courier, monospace;"
                                type="text" name="name" value="<?php echo $name;?>" autofocus></td>
                    </tr>

                    <tr>
                        <td colspan=3>
                            <hr>
                        </td>
                    </tr>

                    <tr>
                        <td align="left" style="font-family:Courier, monospace;">Product code</td>
                        <td>:</td>
                        <td> <input
                                style="background-color:#f7f1e3; width:100%; border-radius: 5px; font-family:Courier, monospace;"
                                type="text" name="code" value="<?php echo $code;?>">

                    </tr>


                    <tr>
                        <td colspan=3>
                            <hr>
                        </td>
                    </tr>


                    <tr>
                        <td align="left" style="font-family:Courier, monospace;">Product price</td>
                        <td>:</td>
                        <td> <input
                                style="background-color:#f7f1e3; width:100%; border-radius: 5px; font-family:Courier, monospace;"
                                type="text" name="price" value="<?php echo $price?>">
                        </td>
                    </tr>

                    <tr>
                        <td colspan=3>
                            <hr>
                        </td>
                    </tr>

                    <tr>
                        <td align="left" style="font-family:Courier, monospace;">Product Image</td>
                        <td>:</td>
                        <td> <input
                                style="background-color:#f7f1e3; width:100%; border-radius: 5px; font-family:Courier, monospace;"
                                type="text" name="image" value="<?php echo $image?>">
                        </td>
                    </tr>

                    <tr>
                        <td colspan=3>
                            <hr>
                        </td>
                    </tr>

                    <tr>
                        <td colspan=3 align="center">
                            <!-- <input style="width: 60%; height: 20px; background-color:#f7f1e3; border-radius: 50px;"
                                type="reset" name="Reset" value="Reset">
                            &nbsp; -->
                            <?php if ($update == true): ?>
                            <button type="submit" name="update"
                                style="width: 40%; height: 30px; background-color:#f7f1e3; border-radius: 5px; margin-top:15px; margin-bottom:15px;font-family:Courier, monospace; font-size:17px">Update</button>
                            <?php else:?>
                            <?php endif?>
                        </td>
                    </tr>

                </table>
            </fieldset>
        </form>
    </div>
</body>

</html>