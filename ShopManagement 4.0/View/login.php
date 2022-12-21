<?php
session_start();
if (isset($_SESSION['message']))
    {
        // echo $_SESSION['message'];
        unset ($_SESSION['message']);
    }
require "../Control/db_connect.php";
$email=$password="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (isset($_POST['login']))
    {
        $add=0;
        $email=mysqli_real_escape_string($conn, $_POST['email']);
        $password=mysqli_real_escape_string($conn, $_POST['password']);
        $U_type=mysqli_real_escape_string($conn, $_POST['U_type']);
        if (empty($_POST['email']))
        {
            $_SESSION["message"]="You must enter email and password";$add=1;
        }
        if (empty($_POST['password']))
        {
            $_SESSION["message"]="You must enter email and password"; $add=1;
        }
        
        
        if ($add==0)
        {
            $sql_login = "SELECT * FROM customer WHERE email='$email' AND password='$password' AND U_type='$U_type'";
            $sql_login_result = mysqli_query($conn, $sql_login);
            if($row=mysqli_fetch_array($sql_login_result))
            {
                if ($row['email']=$email && $row['password']=$password && $row['U_type']=='Admin')
                {
                    $_SESSION['email'] = $email;
                    if (isset($_POST['remember']))
                     {
                         setcookie ('email', $email, time()+60*60*7);
                        //  setcookie ('password', $password, time()+60*60*7);
                     }
                    header ("location: AdminPanel.php");
                }
                elseif($row['email']=$email && $row['password']=$password && $row['U_type']=='Customer')
                {
                    $_SESSION['email'] = $email;
                    // SET COOKIES STARTS
                     if (isset($_POST['remember']))
                     {
                         setcookie ('email', $email, time()+60*60*7);
                         setcookie ('password', $password, time()+60*60*7);
                     }
                     // SET COOKIES ENDS
                    header ("location: productslist.php");     
                }
                
            }
            else
            {
                $_SESSION["message"]="Invalid Email or Password!";
            }
        }
    }
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>

    <script>
    function validateForm() {
        var email = document.getElementById("email").value;
        var pass = document.getElementById("pass").value;
        if (email == "" || pass == "") {
            alert("All fields must be filled out");
            return false;
        }
    }
    </script>

</head>

<body>
    <div class="content_section">
        <div class="header_content">
            <a href="../index.php">
                <img src="../images/LogoHead.png" alt="Logo">
            </a>
            <h1></h1>
        </div>
    </div>

    <div class="navSection">
        <div class="logo">
            <a href="../index.php">
                <img src="../images/logo.png" alt="Logo">
            </a>
        </div>
        <nav>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="logincustomer.php">Products</a></li>
                <li><a href="aboutus.php">About</a></li>
                <li><a href="contactus.php">Contact</a></li>
                <li><a href="login.php">Account</a></li>
            </ul>
        </nav>
        <img src="../images/cart.png" class="cartIcon" alt="">
    </div>



    <div class="container">
        <div class="left"></div>
        <div class="right">
            <div class="formbox">
                <form action="" method='POST' onsubmit="return validateForm()">
                    <span for="" class="error_msg"><?php
                            if (isset($_SESSION['message']))
                            {
                                echo $_SESSION['message'];
                                unset ($_SESSION['message']);
                            }
                            ?></span><br>
                    <label for="">Email</label><br>
                    <input id="email" type="text" name="email" value="<?php echo $email?>"><br>
                    <label for="">Password</label> <br>
                    <input id="pass" type="password" name="password" value="<?php echo $password?>"><br>

                    <input type="checkbox" name="remember" value=1>
                    <span>Remember me</span>
                    <select name="U_type">
                        <option value="Customer">Customer</option>
                        <option value="Admin">Admin</option>
                    </select>
                    <input name="login" type="submit" value="Login">
                    <!-- <input name="loginas_emp" type="button" value="Login as employee" href="empLogin.php"><br><br> -->

                    <!-- <a href="index.php"><input name="back" type="button" value="Back"></a><br> -->
                    <span>New here?</span>
                    <a href="signup.php">Register now!</a>

            </div>
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
</body>

</html>