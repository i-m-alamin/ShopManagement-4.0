<?php
session_start();
require "../Control/db_connect.php";
$emp_email=$emp_pass="";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST['login']))
    {
        
        $emp_email=mysqli_real_escape_string($conn,$_POST['email']);
        $emp_pass=mysqli_real_escape_string($conn,$_POST['password']);
        $emp_login_sql="SELECT * FROM employee WHERE email='$emp_email' AND password='$emp_pass'";
        // $emp_login_sql_result=mysqli_query($conn,$emp_login_sql);
        $emp_login_sql_result=$conn->query($emp_login_sql);
        // if(mysqli_num_rows($emp_login_sql_result)>0)
        if(($emp_login_sql_result->num_rows)>0)
        {
            $_SESSION['email']=$emp_email;
            setcookie('email', $emp_email, time ()+60*60*7);
            setcookie('password', $emp_pass, time ()+60*60*7);
            header("location: employeePanel.php");
        }
        else
        {
            $_SESSION['message']="Invalid email or password";
        }

    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>

<body>
    <div>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact us</a></li>
        </ul>
    </div>
    <div align="center">
        <table align="center" cellspacing="0px" cellpadding="5%">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='POST'>
                <tr>
                    <td colspan=3 align="center">
                        <?php
                            if (isset($_SESSION['message']))
                            {
                                echo "<span>{$_SESSION['message']}</span>";
                                unset ($_SESSION['message']);
                            }
                            ?>
                    </td>
                </tr>


                <tr>
                    <td colspan=3>
                        Email
                    </td>
                </tr>
                <tr>
                    <td colspan=3>
                        <input type="email" name="email" value="<?php echo $emp_email?>" required autofocus>
                    </td>
                </tr>

                <tr>
                    <td colspan=3> Password </td>

                </tr>
                </tr>

                <tr>
                    <td colspan=3>
                        <input type="password" name="password" value="<?php echo $emp_pass?>" required>
                    </td>
                </tr>
                <tr>
                    <td colspan=3></td>
                </tr>


                <tr>
                    <td colspan=3>
                        <input type="checkbox" name="remember" value=1>
                        <span>Remember me</span>

                    </td>
                </tr>

                <tr>
                    <td align="center" colspan=3>
                        <input name="login" type="submit" value="Login">
                        <a href="index.php"><input name="back" type="button" value="Back"></a>
                    </td>
                </tr>
            </form>
        </table>
    </div>
</body>

</html>