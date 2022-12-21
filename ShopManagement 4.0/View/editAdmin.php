<?php
session_start();
require "../Control/db_connect.php";
$update=true;
$username=$fullname=$address=$email=$contact=$dob=$password=$U_type="";
$usernameError=$fullnameError=$addressError=$emailError=$contactError=$genError=$dobError=$passError="";
// echo $_SESSION['email'];

if (isset($_SESSION['email']))
{
    $mail=$_SESSION['email'];
    // echo $mail;
    //$edit_admin_sql=mysqli_query($conn,"SELECT * FROM customer WHERE email='$mail'");
    // echo $mail;
    $edit_admin_sql = $conn->query("SELECT * FROM customer WHERE email='$mail'");
    //if ($edit_admin_sql == TRUE)
    if ($edit_admin_sql->num_rows > 0)
    {
        // $row = $edit_admin_sql->fetch_assoc();
        $row = $edit_admin_sql->fetch_assoc();
        $username=$row['username'];
        $fullname=$row['fullname'];
        $address=$row['address'];
        $email=$row['email'];
        $contact=$row['contact'];
        $dob=$row['dob'];
        $password=$row['password'];
        $U_type=$row['U_type'];
    }  
} 


if (isset($_POST['update']))
{
    if($U_type=="Admin")
        {
          $username=$_POST['username'];
          $fullname=$_POST['fullname'];
          $address=$_POST['address'];
          $email=$_POST['email'];
          $contact=$_POST['contact'];
          $dob=$_POST['dob'];
          $password=$_POST['password'];
          $conn->query("UPDATE customer SET username='$username', fullname='$fullname', address='$address', email='$email', contact='$contact', dob='$dob', password='$password' WHERE email='$mail'");
          /* mysqli_query($conn, "UPDATE customer SET username='$username', fullname='$fullname', address='$address', email='$email', contact='$contact', dob='$dob', password='$password' WHERE email='$mail'"); */
          header('location: AdminPanel.php');
        }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/validate.js"></script>
    <link rel="stylesheet" href="../css/edit_admin.css">
    <script>
    function goBack() {
        window.history.back();
    }
    </script>
    <title>Admin profile</title>
</head>

<body>

    <div class="container">

        <div class="content_section">
            <div class="header_content">
                <a href="../index.php">
                    <img src="../images/LogoHead.png" alt="Logo">
                </a>
                <h1></h1>
            </div>
        </div>


        <div class="formbox">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='POST'
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
                <input type="date" onfocus="(this.type='date')" name="dob" id="dob" min="1980-01-01" max="2022-01-01"
                    value="<?php echo $dob;?>"><br>
                <span id="dobError" class="errorMsg"></span><br>

                <label for="">Password</label> <br>
                <input type="password" name="password" id="password" value="<?php echo $password; ?>"><br>
                <span id="passError" class="errorMsg"></span><br>
                <input type="submit" name="update" value="Update"><br>
                <input name="back" class="btn" type="button" value="Back" onclick="goBack()">
                <!-- <a href="login.php"><input name="back" type="button" value="Back"></a> -->

        </div>
    </div>
</body>

</html>