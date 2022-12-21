<?php
session_start();
require "../Control/db_connect.php";
require "../Control/Validation.php";
$update=true;
$username=$fullname=$address=$email=$contact=$dob=$password=$U_type=$orderstatus="";
$usernameError=$fullnameError=$addressError=$emailError=$contactError=$genError=$dobError=$passError=$orderstatusError="";

if(isset($_GET['del']))
{
    $ID= $_GET['del'];
    $cus_del_sql="DELETE FROM customer WHERE ID=$ID";
    // $cus_del_sql_result=mysqli_query($conn, $cus_del_sql);[Procedural]
    $cus_del_sql_result=$conn->query ($cus_del_sql);
    header("location: customerList.php");

}
if (isset($_GET['edit']))
{
    $ID= $_GET['edit'];
    // $update=true;
    // $results=mysqli_query($conn, "SELECT * FROM customer WHERE ID=$ID");[Procedural]
    $results=$conn->query("SELECT * FROM customer WHERE ID=$ID");
    {
    //$n=mysqli_fetch_array($results);
      $n=$results->fetch_array();
      $username=$n['username'];
      $fullname=$n['fullname'];
      $address=$n['address'];
      $email=$n['email'];
      $contact=$n['contact'];
      $dob=$n['dob'];
      $password=$n['password'];
      $U_type=$n['U_type'];
    }

    


     if (isset($_POST['update']))
    {
        $temp=0;
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
           if (empty ($_POST["order"]))
           {
              $passError = "You must enter orderstatus!"; $temp=1;
           }    
                if ($temp==0)
                {
    
                    if($U_type=="Customer")
                    {
                      $username=$_POST['username'];
                      $fullname=$_POST['fullname'];
                      $address=$_POST['address'];
                      $email=$_POST['email'];
                      $contact=$_POST['contact'];
                      $dob=$_POST['dob'];
                      $password=$_POST['password'];
                      $orderstatus=$_POST['orderstatus'];
                      mysqli_query($conn, "UPDATE customer SET username='$username', fullname='$fullname', address='$address', email='$email', contact='$contact', dob='$dob', password='$password',order status=$orderstatus WHERE ID=$ID");
                      header ('location: customerList.php');
                      $_SESSION['messasge']="Edited Successfully";
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
    <link rel="stylesheet" href="../css/edit_cus_info.css">
    <script src="../js/validate.js"></script>
    <script>
    function goBack() {
        window.history.back();
    }
    </script>
    <title>Customer Information</title>
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

    </div>
    <div class="formbox">
        <form action="" method='POST' onsubmit="return validateForm()">
            <span for="" class="error_msg"><?php
                            if (isset($_SESSION['message']))
                            {
                                echo $_SESSION['message'];
                                unset ($_SESSION['message']);
                            }
                            ?></span><br>
            <input type="hidden" name="id" value="<?php echo $id;?>">
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
            <label for="">order status</label> <br>
            <input type="orderstatus" name="orderstatus" id="orderstatus" value="<?php echo $orderstatus; ?>"><br>
            <span id="orderstatuserror" class="errorMsg"></span><br>
            <?php if ($update == true): ?>
            <button type="submit" name="update" class="btn">Update</button>
            <?php else:?>
            <?php endif?><br>
            <input name="back" class="btn" type="button" value="Back" onclick="goBack()">

    </div>
</body>

</html>