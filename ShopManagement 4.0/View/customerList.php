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
    <title>Customer list</title>
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
                    <th>Customer ID</th>
                    <th>Username</th>
                    <th>Fullname</th>
                    <th>Address</th>
                    <th>Email Address</th>
                    <th>Phone</th>
                    <th>Birthdate</th>
                    <th>order status</th>
                    <th colspan=2>Action</th>
                    
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
                                              if ($row['U_type']=='Customer')
                                              {

                                                echo "<tr align='center'>";
                                                echo "<td>".$row['ID']."</td>";
                                                echo "<td>".$row['username']."</td>";
                                                echo "<td>".$row['fullname']."</td>";
                                                echo "<td>".$row['address']."</td>";
                                                echo "<td>".$row['email']."</td>";
                                                echo "<td>".$row['contact']."</td>";
                                                echo "<td>".$row['dob']."</td>";
                                                echo "<td>".$row['orderstatus']."</td>";
                                                echo "<td> <a href='editCusInfo.php?edit=$row[ID]'> <input type='button' name='edit' value='Edit'> </a>";
                                                echo "<td> <a href='editCusInfo.php?del=$row[ID]'> <input type='button' name='delete' value='Delete'> </a>";
                                                echo "</tr>";
                                                // echo "<tr><td>".$row['ID']."</td><td>" .$row['username']. "</td><td>".$row['fullname']. "</td><td>" .$row['address']. "</td><td>" .$row['email']. "</td><td>" .$row['contact']."</td><td>" .$row['dob']. "</td><td>" <a href=\"editCustomer.php\">Edit</a>"</td></tr>";
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