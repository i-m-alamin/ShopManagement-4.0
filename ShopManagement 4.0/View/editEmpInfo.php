<?php
session_start();
require "../Control/db_connect.php";
$update=true;
$emp_name=$emp_email=$emp_phone=$emp_gender=$emp_dob=$emp_age=$emp_address=$emp_joining_date=$emp_pass=$row="";
if (isset($_GET['del']))
{
    $ID=$_GET['del'];
    $emp_del_sql="DELETE FROM employee WHERE ID=$ID";
    $emp_del_sql_result=mysqli_query($conn,$emp_del_sql);
    $emp_del_sql_result=$conn->query(emp_del_sql);
    header("location: employeeList.php");
}
if(isset($_GET['edit']))
{
    $ID=$_GET['edit'];
    $emp_edit_sql="SELECT * FROM employee WHERE ID=$ID";
    // $emp_edit_sql_result=mysqli_query($conn,$emp_edit_sql);
    $emp_edit_sql_result=$conn->query($emp_edit_sql);
    if($emp_edit_sql_result == TRUE)
    {
        // $row=mysqli_fetch_array($emp_edit_sql_result);
        $row=$emp_edit_sql_result->fetch_array();
        $emp_name=$row['name'];
        $emp_email=$row['email'];
        $emp_phone=$row['phone'];
        $emp_gender=$row['gender'];
        $emp_dob=$row['dob'];
        $emp_age=$row['age'];
        $emp_address=$row['address'];
        $emp_joining_date=$row['joining_date'];
        $emp_pass=$row['password'];
        
    }
}
    if (isset($_POST['update']))
    {
        $emp_name=$_POST['name'];
        $emp_email=$_POST['email'];
        $emp_phone=$_POST['phone'];
        $emp_gender=$_POST['gender'];
        $emp_dob=$_POST['dob'];
        $emp_age=$_POST['age'];
        $emp_address=$_POST['address'];
        $emp_joining_date=$_POST['joining_date'];
        $emp_pass=$_POST['password'];
        $emp_update_sql="UPDATE employee SET name='$emp_name', email='$emp_email', phone='$emp_phone', gender='$emp_gender', dob='$emp_dob', age='$emp_age', address='$emp_address', joining_date='$emp_joining_date', password='$emp_pass' WHERE ID='$ID'";
        // mysqli_query($conn,$emp_update_sql);
        $conn->query($emp_update_sql);
        header("location: employeeList.php");
    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/edit_cus_info.css">
    <script src="../js/validate.js"></script>
    <script>
    function goBack() {
        window.history.back();
    }
    </script>
    <title>Employee info</title>
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
    </div>
    <div class="formbox">
        <form action="" method='POST'>
            <span for="" class="error_msg"><?php
                            if (isset($_SESSION['message']))
                            {
                                echo $_SESSION['message'];
                                unset ($_SESSION['message']);
                            }
                            ?></span><br>
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <label for="">Full name</label><br>
            <input type="text" name="name" value="<?php echo $emp_name;?>" autofocus><br><br>

            <label for="">Email</label> <br>
            <input type="text" name="email" value="<?php echo $emp_email;?>"><br><br>

            <label for="">Phone</label> <br>
            <input type="text" name="phone" value="<?php echo $emp_phone?>"><br><br>

            <label for="">Gender</label> <br>
            <input type="radio" name="gender" value="Male" <?php 
                        if ($row["gender"]=="Male")
                        {
                            echo "checked";
                        }
                        ?>> <span>Male</span>

            <input type="radio" name="gender" value="Female" <?php 
                        if ($row["gender"]=="Female")
                        {
                            echo "checked";
                        }
                        ?>>
            <span>Female</span><br><br>

            <label for="">Date Of Birth</label> <br>
            <input type="date" name="dob" value="<?php echo "$emp_dob";?>"><br><br>

            <label for="">Age</label> <br>
            <input type="text" name="age" value="<?php echo $emp_age?>"><br><br>

            <label for="">Address</label> <br>
            <input type="text" name="address" value="<?php echo $emp_address?>"><br><br>

            <label for="">Joining date</label> <br>
            <input type="date" name="joining_date" value="<?php echo $emp_joining_date?>"><br><br>

            <label for="">Password</label> <br>
            <input type="password" name="password" minlength="4" value="<?php echo $emp_pass; ?>"><br><br>
            <?php if ($update == true): ?>
            <button type="submit" name="update" class="btn">Update</button>
            <?php else:?>
            <?php endif?><br>
            <input name="back" class="btn" type="button" value="Back" onclick="goBack()">

    </div>
</body>

</html>