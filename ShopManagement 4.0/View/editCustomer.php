<?php
session_start();
require "../Control/db_connect.php";
$update=true;
$username=$fullname=$address=$email=$contact=$dob=$password=$U_type="";
// echo $_SESSION['email'];

if (isset($_SESSION['email']))
{
    $mail=$_SESSION['email'];
    // echo $mail;
    // $edit_admin_sql=mysqli_query($conn,"SELECT * FROM customer WHERE email='$mail'");
    $edit_admin_sql=$conn->query("SELECT * FROM customer WHERE email='$mail'");
    // echo $mail;
    if ($edit_admin_sql == TRUE)
    {
        // $row=mysqli_fetch_array($edit_admin_sql);
        $row=$edit_admin_sql->fetch_array();
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
    if($U_type=="Customer")
        {
          $username=$_POST['username'];
          $fullname=$_POST['fullname'];
          $address=$_POST['address'];
          $email=$_POST['email'];
          $contact=$_POST['contact'];
          $dob=$_POST['dob'];
          $password=$_POST['password'];
          mysqli_query($conn, "UPDATE customer SET username='$username', fullname='$fullname', address='$address', email='$email', contact='$contact', dob='$dob', password='$password' WHERE email='$mail'");
          header('location: adminList.php');
        }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div align="center">
        <form action="" method='POST'>
            <table align="center" cellspacing="0px" cellpadding="5%">
                <tr>
                    <td colspan=3 align="center">
                        <h1>Admin</h1>
                    </td>
                    <!-- Also add a hidden field to hold the id of the record we will be updating so that it can be recognized in the database uniquely by it's id. -->
                </tr>
                <input type="hidden" name="email" value="<?php echo $email;?>">

                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td> <input type="text" name="username" value="<?php echo $username;?>" autofocus></td>
                </tr>



                <tr>
                    <td colspan=3>
                        <hr>
                    </td>
                </tr>

                <tr>
                    <td align="left">Full Name</td>
                    <td>:</td>
                    <td> <input type="text" name="fullname" value="<?php echo $fullname;?>">

                </tr>



                <tr>
                    <td colspan=3>
                        <hr>
                    </td>
                </tr>


                <tr>
                    <td align="left">Address</td>
                    <td>:</td>
                    <td> <input type="text" name="address" value="<?php echo $address?>">
                    </td>
                </tr>



                <tr>
                    <td colspan=3>
                        <hr>
                    </td>
                </tr>


                <tr>
                    <td align="left">Contact</td>
                    <td>:</td>
                    <td> <input type="tel" name="contact" placeholder="01X-XXXX-XXXX" value="<?php echo $contact;?>">
                    </td>
                </tr>



                <tr>
                    <td colspan=3>
                        <hr>
                    </td>
                </tr>

                <tr>
                    <td align="left">Email</td>
                    <td>:</td>
                    <td> <input type="email" name="email" placeholder="someone@example.com" value="<?php echo $email?>">
                    </td>
                </tr>


                <tr>
                    <td colspan=3>
                        <hr>
                    </td>
                </tr>

                </tr>
                <tr>
                    <td align="left"> Date Of Birth
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="date" name="dob" value="<?php echo $dob;?>">
                    </td>
                </tr>



                <tr>
                    <td colspan=3>
                        <hr>
                    </td>
                </tr>

                <tr>
                    <td align="left">Password</td>
                    <td>:</td>
                    <td> <input type="password" name="password" minlength="4" value="<?php echo $password; ?>">
                    </td>
                </tr>



                <tr>
                    <td colspan=3 align="center">
                        <!-- <input style="width: 60%; height: 20px; background-color:#f7f1e3; border-radius: 50px;"
                                type="reset" name="Reset" value="Reset">
                            &nbsp; -->
                        <?php if ($update == true): ?>
                        <button type="submit" name="update">Update</button>
                        <?php else:?>
                        <?php endif?>
                    </td>
                </tr>

                <tr>
                    <td colspan=3></td>
                </tr>


            </table>
            </fieldset>
        </form>
    </div>
</body>

</html>