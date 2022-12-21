<?php
session_start();
require "../Control/db_connect.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer list</title>
</head>

<body>
    <div align="center">
        <table align="center" cellspacing="10px" cellpadding="5%">
            <tr>
                <td>
                    <b><?php echo $_SESSION["email"];?></b>
                </td>
                <td align="center">
                    <h1>Customer list</h1>
                </td>
                <td align="right">
                    <a href="logout.php"><input type="submit" value="Logout"></a>
                    <a href="employeePanel.php"><input name="back" type="button" value="Back"></a>
                </td>
            </tr>
            <tr>
                <td colspan=3>
                    <?php 
                                $cus_list_sql="SELECT * FROM customer";
                                $cus_list_sql_result= $conn->query ($cus_list_sql);
                                if (mysqli_num_rows($cus_list_sql_result)>0)
                                {
                                    echo "<br><table border='1px solid' cellspacing=0px>
                                          <tr align='center'>
                                              <td>Username</td>
                                              <td>Fullname</td>
                                              <td>Address</td>
                                              <td>Email address</td>
                                              <td>Contact information</td>
                                          </tr>";
                                          while ($row = $cus_list_sql_result->fetch_assoc())
                                          {
                                              if ($row['U_type']=='Customer')
                                              {
                                                echo "<tr align='center'>";
                                                echo "<td>".$row['username']."</td>";
                                                echo "<td>".$row['fullname']."</td>";
                                                echo "<td>".$row['address']."</td>";
                                                echo "<td>".$row['email']."</td>";
                                                echo "<td>".$row['contact']."</td>";
                                                echo "</tr>";

                                              }
                                          }
                                }
                    ?><br>

                </td>

            </tr>
        </table>
        </fieldset>
    </div>
</body>

</html>