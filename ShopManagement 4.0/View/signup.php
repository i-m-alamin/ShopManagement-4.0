<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="../css/signup.css">
    <script src="../js/validate.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body>

    <!-- ERROR MESSAGES STARTS -->
    <?php
    session_start();
    require "../Control/db_connect.php";
    require "../Control/Validation.php";
    
    $username=$fullname=$address=$email=$contact=$dob=$password="";

    $usernameError=$fullnameError=$addressError=$emailError=$contactError=$dobError=$passError="";
    
     if ($_SERVER["REQUEST_METHOD"] == "POST") 
     {
        if (isset($_POST['submit']))
         {
            $temp=0;
            /*$username= mysqli_real_escape_string($conn, $_POST['username']);
            $fullname = mysqli_real_escape_string($conn, $_POST["fullname"]);
            $address = mysqli_real_escape_string($conn, $_POST["address"]);
            $email = mysqli_real_escape_string($conn, $_POST["email"]);
            $contact= mysqli_real_escape_string($conn, $_POST["contact"]);
            $dob = mysqli_real_escape_string($conn, $_POST["dob"]);
            $password = mysqli_real_escape_string($conn, $_POST["password"]);*/
            $username= $_POST['username'];
            $fullname = $_POST["fullname"];
            $address = $_POST["address"];
            $email = $_POST["email"];
            $contact=  $_POST["contact"];
            $dob =  $_POST["dob"];
            $password =  $_POST["password"];
            if (empty($_POST["username"]))
            {
                $usernameError = "You must enter your username!"; $temp=1;
            }
            if (empty($_POST["fullname"]))
            { 
               $fullnameError = "You must enter your full-name!"; $temp=1;
            }
            if (empty($_POST["address"]))
            { 
               $addressError = "You must enter your address!"; $temp=1;
            }

             if (empty($_POST["email"]))
            { 
               $emailError = "You must enter your email!"; $temp=1;
            }

            if (empty($_POST["contact"]))
            {
               $contactError = "You must enter your contact!"; $temp=1;
            }


           if (empty ($_POST["dob"]))
           {

               $dobError = "You must enter your birthdate!"; $temp=1;
            }
           

           if (empty ($_POST["password"]))
           {
              $passError = "You must enter your password!"; $temp=1;
           }

        //    Validation

           if ($temp==0)
           {
               if(!validate_username($username))
               {
                   $usernameError = "Invalid username!"; $temp=1;
               }
               else if (!validate_username_existence($username))
               {
                   $usernameError = "Username already used";

               }

               
               if (!validate_fullname($fullname))
               {
                   $fullnameError= "Invalid fullname"; $temp=1;
               }
               

               if(!validate_email($email))
               {
                   $emailError="Invalid email"; $temp=1;
               }
               else if (!validate_email_existence($email))
               {
                   $emailError="Email already used"; $temp=1;
               }


               if (!validate_phone($contact))
               {
                   $contactError="Invalid phone number"; $temp=1;
               }
               else if (!validate_phone_existence($contact))
               {
                   $contactError="Phone number already taken"; $temp=1;
               }


               if (!validate_password($password))
               {
                   $passError="Minimum Lenght of Password is 4"; $temp=1;
               }

           

        //    Validation ends here
           
           if ($temp==0)
           { 
               $sql ="INSERT INTO customer ( username, fullname, address, email, contact, dob, password) VALUES ('$username', '$fullname', '$address', '$email', '$contact', '$dob', '$password')";
               
               $res = mysqli_query($conn, $sql);
               if ($res)
               {
                 echo "inserted successfully";
                 $_SESSION['message']="Successfully signed up!";
                 header ('location: login.php');
                 echo "New records created successfully";
                 $stmt->close();
                 $conn->close();
               }
            }
        }
       }
    }
?>
    <!-- ERROR MESSAGES END HERE -->

    <!-- new registration -->
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
                <li><a href="../View/login.php">Products</a></li>
                <li><a href="../View/aboutus.php">About</a></li>
                <li><a href="../View/contactus.php">Contact</a></li>
                <li><a href="../View/login.php">Account</a></li>
            </ul>
        </nav>
        <!-- <img src="../images/cart.png" class="cartIcon" alt=""> -->
    </div>
    <div class="container">
        <div class="left"></div>
        <div class="right">
            <div class="formbox">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='POST' id="form"
                    onsubmit="return validateForm()">
                    <span for="" class="error_msg"><?php
                            if (isset($_SESSION['message']))
                            {
                                echo $_SESSION['message'];
                                unset ($_SESSION['message']);
                            }
                            ?></span><br>
                    <label for="">Username</label><br>
                    <input type="text" name="username" id="username" value="<?php echo $username;?>" autofocus><br>
                    <span id="userError" class="errorMsg"><?php echo $usernameError ?></span><br>

                    <label for="">Fullname</label> <br>
                    <input type="text" name="fullname" id="fullname" value="<?php echo $fullname;?>"><br>
                    <span id="fullnameError" class="errorMsg"></span><br>

                    <label for="">Address</label> <br>
                    <input type="text" name="address" id="address" value="<?php echo $address?>"><br>
                    <span id="addressError" class="errorMsg"></span><br>

                    <label for="">Email</label> <br>
                    <input type="text" name="email" id="email" placeholder="someone@example.com"
                        value="<?php echo $email?>"><br>
                    <span id="emailError" class="errorMsg"><?php echo $emailError?></span><br>

                    <label for="">Contact</label> <br>
                    <input type="text" name="contact" id="contact" placeholder="01X-XXXX-XXXX"
                        value="<?php echo $contact;?>"><br>
                    <span id="contactError" class="errorMsg"><?php echo $contactError?></span><br>

                    <label for="">Date of birth</label> <br>
                    <input type="date" onfocus="(this.type='date')" name="dob" id="dob" min="1980-01-01"
                        max="2022-01-01" value="<?php echo $dob;?>"><br>
                    <span id="dobError" class="errorMsg"></span><br>

                    <label for="">Password</label> <br>
                    <input type="password" name="password" id="password" value="<?php echo $password; ?>"><br>
                    <span id="passError" class="errorMsg"></span><br>
                    <a href="../View/aboutus.php"><input type="submit" name="submit" value="Sign up"><br>
                    <a href="../View/login.php"><input name="login" type="submit" value="Back"></a>

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
    <!-- new registration ends -->

</body>

</html>