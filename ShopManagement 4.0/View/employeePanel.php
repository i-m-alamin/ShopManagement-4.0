<?php
session_start();
require "../Control/db_connect.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee panel</title>
</head>

<body>
    <div align="center">
        <table align="center" cellspacing="10px" cellpadding="5%">
            <tr>
                <td>
                    <b> <?php echo $_SESSION["email"];?></b><br><br>
                    <a href="editEmpInfo.php"><input type="submit" value="Edit profile"></a>
                </td>
                <td align="center">
                    <h1>
                        Employee panel
                    </h1>
                </td>
                <td align="right">


                    <a href="logout.php"><input type="submit" value="Logout"></a>
                    <a href="index.php"><input name="back" type="button" value="Back"></a>
                </td>
            </tr>

            <tr>
                <td colspan=3>
                    <hr>
                </td>
            </tr>

            <tr>
                <td colspan=3>
                    <p align="center"><b><a href="customerListEmp.php">Customer
                                list</a></b></p>
                </td>

            </tr>

            <tr>
                <td colspan=3>
                    <p align="center"><b><a href=" employeeListEmp.php">Employee
                                list</a></b></p>
                </td>

            </tr>

            <tr>
                <td colspan=3>
                    <p align="center"><b><a href=" productListInfo.php">Products
                                list</a></b></p>
                </td>

            </tr>

            <tr>
                <td colspan=3>
                    <p align="center"><b><a href="signup.php">Add customer</a></b>
                    </p>
                </td>

            </tr>
        </table>
        </fieldset>
    </div>
</body>

</html>