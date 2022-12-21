<?php
function validate_emp_name($emp_name)
{
    if (!preg_match("/^[a-zA-Z][a-zA-Z.'']*/",$emp_name) || $emp_name>4)
    {
        return false;
    }
    else
    {
        return true;
    }
}
function validate_emp_password($emp_pass)
{
    if (strlen($emp_pass)<4)
    {
        return false;
    }
    else
    {
        return true;
    }
}
function validate_emp_email($emp_email)
{
    if (!filter_var($emp_email, FILTER_VALIDATE_EMAIL))
    {
        return false;
    }
    else
    {
        return true;
    }
}
function validate_emp_email_existence($emp_email)
{
    require "db_connect.php";
    $emp_email_sql="SELECT * FROM employee WHERE email='$emp_email'";
    $emp_email_sql_result= mysqli_query($conn,$emp_email_sql);
    if(mysqli_num_rows($emp_email_sql_result)>0)
    {
        return false;
    }
    else
    {
        return true;
    }
}
function validate_emp_phone($emp_phone)
{
    if (!preg_match("/^[0-9]{11}$/", $emp_phone) || strlen($emp_phone)!=11)
    {
        return false;
    }
    else
    {
        return true;
    }
}
function validate_emp_phone_existence($emp_phone)
{
    require "db_connect.php";
    $emp_phone_check = "SELECT * FROM employee WHERE phone='$emp_phone'";
    $emp_phone_check_res = mysqli_query($conn,$emp_phone_check);
    if (mysqli_num_rows($emp_phone_check_res)>0)
    {
        return false;
    }
    else
    {
        return true;
    }
}
?>