<?php
session_start();
require ("../Control/db_connect.php");
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
    <title>Employee list</title>
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
                    <th>Employee ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>date of birth</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Joining date</th>
                    <th>Password</th>
                    <th colspan=2>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    $emp_list_sql=("SELECT * FROM employee");
                    $emp_list_result= $conn->query ($emp_list_sql);
                    // if (mysqli_num_rows($emp_list_result))
                    if (($emp_list_result->num_rows)>0)
                    {
                        while ($row = $emp_list_result->fetch_assoc())
                        {                        
                        ?>
                <tr>
                    <td><?php echo $row['ID'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['phone'] ?></td>
                    <td><?php echo $row['gender'] ?></td>
                    <td><?php echo $row['dob'] ?></td>
                    <td><?php echo $row['age'] ?></td>
                    <td><?php echo $row['address'] ?></td>
                    <td><?php echo $row['joining_date'] ?></td>
                    <td><?php echo $row['password'] ?></td>

                    <td> <a href="editEmpInfo.php?edit= <?php echo $row['ID'] ?>"> <input type="submit" name="edit"
                                value="Edit">
                    </td></a>
                    <td> <a href="editEmpInfo.php?del=<?php echo $row['ID'] ?>"> <input type="submit" name="delete"
                                value="Delete"></a>
                    </td>
                </tr>
                <?php }}?>
                </tr>
            </tbody>
        </table>
        <input name="back" class="btn" type="button" value="Back" onclick="goBack()">
    </div>
</body>

</html>