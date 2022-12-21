<?php
session_start();
require "../Control/db_connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin_list.css">
    <script>
    function goBack() {
        window.history.back();
    }
    </script>
    <title>Admin list</title>
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
    <div class="header">Welcome, <span><?php echo $_SESSION["email"];?></span></div>
    <div>
        <table class="content-table" cellspacing="10px" cellpadding="5%">
            <!-- <tr>
                <td>
                    <b> <?php echo $_SESSION["email"];?></b>
                </td>
                <td align="center">
                    <h1>
                        <p><b>Admin list</b></p>
                    </h1>
                </td>
                <td align="right">

                    <a href="adminPanel.php"><input name="back" type="button" value="Back"></a>


                    <a href="logout.php"><input type="submit" value="Logout"></a>
                </td>
            </tr> -->

            <thead>
                <tr>
                    <th>Username</th>
                    <th>Fullname</th>
                    <th>Address</th>
                    <th>Email Address</th>
                    <th>Phone</th>
                    <th>Birthdate</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php 
                        $cus_list_sql="SELECT * FROM customer";
                        $cus_list_sql_result= $conn->query ($cus_list_sql);
                        if (mysqli_num_rows($cus_list_sql_result)>0)
                        {
                                while ($row = $cus_list_sql_result->fetch_assoc())
                                {
                                    if ($row['U_type']=='Admin')
                                        {
                                          echo "<tr align='center'><td>" .$row['username']. "</td><td>".$row['fullname']. "</td><td>" .$row['address']. "</td><td>" .$row['email']. "</td><td>" .$row['contact']."</td><td>" .$row['dob']. "</td></tr>";
                                        }
                                }
                        }    
                    ?>
                </tr>
            </tbody>
        </table>
        <input name="back" class="btn" type="button" value="Back" onclick="goBack()">
    </div>
</body>

</html>