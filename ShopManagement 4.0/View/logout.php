<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background: gray">
    <?php
    session_start();
    session_destroy();
    if(isset($_COOKIE['email']) && isset($_COOKIE['password']))
    {
        $email = $_COOKIE['email'];
        $password =$_COOKIE['password'];
        setcookie('email',$email, time()-1);
        setcookie('password',$password, time()-1);
        echo "<script> alert('Logged out!')</script>";
        
    }
    
        header("location:../index.php");
    
    // $_SESSION['message']="Logged out!";
   ?>

    <!-- <div align="center">
        <table>
            <tr>
                <td>
                    <?php echo "<span>{$_SESSION['message']}</span>";
                            unset ($_SESSION['message']);
                    ?>
                </td>
            </tr>
            <tr>
                <td align="center">
                    <a href="login.php"><input type="submit" value="Login again"></a>
                </td>
            </tr>
        </table>
    </div> -->
</body>

</html>