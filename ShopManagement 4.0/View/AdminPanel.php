<?php
session_start();
require "../Control/db_connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin_panel.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <title>Admin panel</title>
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

        <div class="wrapper">
            <div class="sidebar">
                <h2>Admin Panel</h2>
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="editAdmin.php">Profile</a></li>
                    <li><a href="adminList.php">Admins</a></li>
                    <li><a href="customerList.php">Customers</a></li>
                    <li><a href="employeeList.php">Employees</a></li>
                    <li><a href="productListInfo.php">Products</a></li>
                    <li><a href="addEmployee.php">Add employee</a></li>
                </ul>
                <a href="logout.php"><input name="logout" class="btn" type="button" value="Logout"></a>

                <!-- <div class="social_media">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div> -->
            </div>
            <div class="main_content">
                <div class="header">Welcome, <span><?php echo $_SESSION["email"];?></span></div>
                <div class="info">
                    <div>Positive thinking is more than just a tagline. It changes the way we behave. And I firmly believe that when I am positive, it not only makes me better, but it also makes those around me better.</div>
                    <div>“When your troops go to war, the prime minister or the president change overnight from an administrator, dealing with taxation and welfare and health and deteriorating roads, into the commander-in-chief. And it’s just become almost unpatriotic to describe Bush’s fallacious and ill-advised and mistaken and sometimes misleading actions.” ~ Jimmy Carter</div>
                    
                </div>
            </div>
        </div>
    </div>

</body>

</html>