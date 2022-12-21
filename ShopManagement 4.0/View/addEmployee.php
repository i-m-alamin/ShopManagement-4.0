<?php 
session_start();
require "../Control/db_connect.php";
require "../Control/emp_Validation.php";
$emp_name=$emp_email=$emp_phone=$emp_gender=$emp_dob=$emp_age=$emp_address=$emp_joining_date=$emp_pass="";
$emp_name_err=$emp_email_err=$emp_phone_err=$emp_gender_err=$emp_dob_err=$emp_age_err=$emp_address_err=$emp_joining_date_err=$emp_pass_err="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (isset($_POST['submit']))
    {
        $add=0;
        $emp_name = mysqli_real_escape_string($conn, $_POST['name']);
        $emp_email= mysqli_real_escape_string($conn, $_POST['email']);
        $emp_phone= mysqli_real_escape_string($conn, $_POST['phone']);
        $emp_gender= mysqli_real_escape_string($conn, $_POST['gender']);
        $emp_dob= mysqli_real_escape_string($conn, $_POST['dob']);
        $emp_age= mysqli_real_escape_string($conn, $_POST['age']);
        $emp_address= mysqli_real_escape_string($conn, $_POST['address']);
        $emp_joining_date= mysqli_real_escape_string($conn, $_POST['joining_date']);
        $emp_pass= mysqli_real_escape_string($conn, $_POST['password']);
        if (empty($_POST['name']))
        {
            $emp_name_err="You must enter employee name"; $add=1;
        }
        if (empty($_POST['email']))
        {
            $emp_email_err="You must enter employee email"; $add=1;
        }
        if (empty($_POST['phone']))
        {
            $emp_phone_err="You must enter employee phone"; $add=1;
        }
        if (empty($_POST['gender']))
        {
            $emp_gender_err="You must enter employee gender"; $add=1;
        }
        if (empty($_POST['dob']))
        {
            $emp_dob_err="You must enter employee date of birth"; $add=1;
        }
        if (empty($_POST['age']))
        {
            $emp_age_err="You must enter employee age"; $add=1;
        }
        if (empty($_POST['address']))
        {
            $emp_address_err="You must enter employee address"; $add=1;
        }
        if (empty($_POST['joining_date']))
        {
            $emp_joining_date_err="You must enter employee joining date"; $add=1;
        }
        if (empty($_POST['password']))
        {
            $emp_pass_err="You must enter employee password"; $add=1;
        }
    
    
    
        if ($add==0)
        {
            $emp_add_sql="INSERT INTO employee (name, email, phone, gender, dob, age, address, joining_date, password) VALUES ('".$emp_name."' , '".$emp_email."' , '".$emp_phone."' , '".$emp_gender."' , '".$emp_dob."' , '".$emp_age."' , '".$emp_address."' , '".$emp_joining_date."' , '".$emp_pass."')";
            // if (mysqli_query($conn,$emp_add_sql) == TRUE)
            if ($conn->query($emp_add_sql) == TRUE)
            {
                header ("location: employeeList.php");
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
    <link rel="stylesheet" href="../css/add_emp.css">
    <script src="../js/validate.js"></script>
    <script>
    function goBack() {
        window.history.back();
    }
    </script>
    <title>Add new employee</title>
</head>

<body>

    <div class="content_section">
        <div class="header_content">
            <a href="../index.php">
                <img src="../images/LogoHead.png" alt="Logo">
            </a>

        </div>
    </div>
    <div class="header">Welcome, <span><?php echo $_SESSION["email"];?></span>
        <a href="AdminPanel.php"><button type="submit" name="update" class="Cusbtn">Menu</button></a>
    </div>
    <div class="formbox">
        <form action="" method='POST'>
            <span for="" class="error_msg"><?php
                            if (isset($_SESSION['message']))
                            {
                                echo $_SESSION['message'];
                                unset ($_SESSION['message']);
                            }
                            ?></span><br>
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <label for="">Full name</label><br>
            <input type="text" name="name" value="<?php echo $emp_name;?>" autofocus><br>
            <span id="userError" class="errorMsg"><?php echo $emp_name_err ?></span><br>

            <label for="">Email</label> <br>
            <input type="text" name="email" value="<?php echo $emp_email;?>"><br>
            <span id="userError" class="errorMsg"><?php echo $emp_email_err ?></span><br>

            <label for="">Phone</label> <br>
            <input type="text" name="phone" value="<?php echo $emp_phone?>"><br>
            <span id="userError" class="errorMsg"><?php echo $emp_phone_err ?></span><br>

            <label for="">Gender</label> <br>
            <input type="radio" name="gender" value="Male" checked>
            <span>Male</span>
            <input type="radio" name="gender" value="Female">
            <span>Female</span><br><br>
            <span id="userError" class="errorMsg"><?php echo $emp_gender_err ?></span><br>

            <label for="">Date Of Birth</label> <br>
            <input type="date" name="dob" value="<?php echo "$emp_dob";?>"><br>
            <span id="userError" class="errorMsg"><?php echo $emp_dob_err ?></span><br>

            <label for="">Age</label> <br>
            <input type="text" name="age" value="<?php echo $emp_age?>"><br>
            <span id="userError" class="errorMsg"><?php echo $emp_age_err ?></span><br>

            <label for="">Address</label> <br>
            <input type="text" name="address" value="<?php echo $emp_address?>"><br>
            <span id="userError" class="errorMsg"><?php echo $emp_address_err ?></span><br>

            <label for="">Joining date</label> <br>
            <input type="date" name="joining_date" value="<?php echo $emp_joining_date?>"><br>
            <span id="userError" class="errorMsg"><?php echo $emp_joining_date_err ?></span><br>

            <label for="">Password</label> <br>
            <input type="password" name="password" minlength="4" value="<?php echo $emp_pass; ?>"><br>
            <span id="userError" class="errorMsg"><?php echo $emp_pass_err ?></span>
            <input type="submit" name="submit" value="Add employee" class="btn"><br><br>
            <input name="back" class="btn" type="button" value="Back" onclick="goBack()">

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