function validateForm() {
    var form = document.getElementById("form").value;
    var username = document.getElementById("username").value;
    var fullname = document.getElementById("fullname").value;
    var address = document.getElementById("address").value;
    var email = document.getElementById("email").value;
    var contact = document.getElementById("contact").value;
    var dob = document.getElementById("dob").value;
    var password = document.getElementById("password").value;
    var fullnamePattern=/^[a-zA-Z][a-zA-Z.'']*/;
    var emailPattern =
            /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var phonepattern = /^[0-9]+$/;
    
    /* if (username == "" || fullname == "" || address == "" || email == "" || contact == "" || dob == "" ||
        password == "") {
        alert("All fields must be filled out");
        return false;
    }*/
    if (username=="")
    {
        document.getElementById("userError").innerHTML="Please enter the Username";
        return false;
    }
    if (username.length <= 4)
    {
        document.getElementById("userError").innerHTML="Invalid Username";
        return false;
    }
    if(!isNaN(username))
    {
        document.getElementById("userError").innerHTML="Username must contain characters";
        return false;
    }

    if (fullname=="")
    {
        document.getElementById("fullnameError").innerHTML="Please enter the Fullname";
        return false;
    }

    if (!fullnamePattern.test(fullname))
    {
        document.getElementById("fullnameError").innerHTML="Invalid Fullname";
        return false;
    }

    if (address=="")
    {
        document.getElementById("addressError").innerHTML="Please enter the Address";
        return false;
    }
    if (email=="")
    {
        document.getElementById("emailError").innerHTML="Please enter the Email";
        return false;
    }
    if (!emailPattern.test(email))
    {
        document.getElementById("emailError").innerHTML="Invalid Email";
        return false;
    }
    if (contact=="")
    {
        document.getElementById("contactError").innerHTML="Please enter your Phone";
        return false;
    }
    if (!phonepattern.test(contact))
    {
        document.getElementById("contactError").innerHTML="Invalid phone";
        return false;
    }
    if (dob=="")
    {
        document.getElementById("dobError").innerHTML="Please enter your Date of Birth";
        return false;
    }
    if (password=="")
    {
        document.getElementById("passError").innerHTML="Please enter the Password";
        return false;
    }
    if (password.length<4)
    {
        document.getElementById("passError").innerHTML="Password must more than 4 characters";
        return false;
    }
}