<?php
     function validate_username($username)
     {
         if(!preg_match("/^[a-zA-Z][a-zA-Z.'']*/", $username))
         {
             return false;
         }
         else
         {
             return true;
         }
     }

     function validate_username_existence($username)
     {
         require "../Control/db_connect.php";
         $username_sql="SELECT * FROM customer WHERE username='$username'";
         $username_sql_result=mysqli_query($conn,$username_sql);
         if(mysqli_num_rows($username_sql_result)>0)
         {
             return false;
         }
         else
         {
             return true;
         }
     }

     function validate_fullname($fullname)
     {
        if (!preg_match("/^[a-zA-Z][a-zA-Z.'']*/",$fullname) || $fullname>4)
        //  Check if the name field only contains letters, dashes, apostrophes and whitespaces
         {
             return false;
         }
         else
         {
            return true;
         }
     }

     function validate_password($password)
     {
        if(strlen($password)<4)
		{
			return false;
		}
		else
		{
			return true;
		}
    }
    
    function validate_email($email)
    {
		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			return false;
		}
		else
		{
			return true;
        }
    }

    function validate_email_existence($email)
    {

        require "db_connect.php";
        $sql_email_check_customer = "SELECT * FROM customer WHERE email='$email'";
        $sql_email_result_customer = mysqli_query($conn,$sql_email_check_customer);
        if(mysqli_num_rows($sql_email_result_customer)>0){
            return false;
        }
        else
        {
            return true;
        }
    }

    function validate_phone($contact) 
	{
       if(!preg_match("/^[0-9]{11}$/", $contact) || strlen($contact)!=11)
	   {
           return false;
	   }
	   else
	   {
           return true;
       } 
    }
    
    function validate_phone_existence($contact)
    {
        require "db_connect.php";
        $sql_phone_check_customer = "SELECT * from customer WHERE contact='$contact'";$sql_phone_result_customer = mysqli_query($conn,$sql_phone_check_customer);
        if(mysqli_num_rows($sql_phone_result_customer)>0){
            return false;
        }
        else
        {
            return true;
        }
    }
?>