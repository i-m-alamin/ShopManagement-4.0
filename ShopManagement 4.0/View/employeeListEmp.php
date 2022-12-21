<?php
session_start();
require ("../Control/db_connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee list</title>
</head>

<body>
    <div align="center">
        <table align="center" cellspacing="0px" cellpadding="5%">
            <tr>
                <td>
                    <b><?php echo $_SESSION["email"];?></b>
                </td>
                <td align="center">
                    <h1>Employee list</h1>
                </td>
                <td align="right">
                    <a href="logout.php"><input type="submit" value="Logout"></a>
                    <a href="employeePanel.php"><input name="back" type="button" value="Back"></a>
                </td>
            </tr>
            <tr>
                <td colspan=3>
                    <?php
                    $emp_list_sql=("SELECT * FROM employee");
                    $emp_list_result= $conn->query ($emp_list_sql);
                    // if (mysqli_num_rows($emp_list_result))
                    if (($emp_list_result->num_rows)>0)
                    {
                    ?> <br>
                    <table border=1px solid cellspacing=0px width=100%>
                        <tr align="center">

                            <td>Name</td>
                            <td>Email</td>
                            <td>Phone</td>
                            <td>Gender</td>

                            <td>Address</td>
                        </tr>
                        <?php
                        while ($row = $emp_list_result->fetch_assoc())
                        {                        
                        ?>
                        <tr align="center">

                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['phone'] ?></td>
                            <td><?php echo $row['gender'] ?></td>
                            <td><?php echo $row['address'] ?></td>
                </td>
            </tr>
            <?php }}?>
        </table>
</body>

</html>