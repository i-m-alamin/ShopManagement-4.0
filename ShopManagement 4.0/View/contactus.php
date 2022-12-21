<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/about_us.css">
    <link rel="stylesheet" href="../css/contact_us.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

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

    <div class="navSection">
        <div class="logo">
            <a href="../index.php">
                <img src="../images/logo.png" alt="Logo">
            </a>
        </div>
        <nav>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="logincustomer.php">Products</a></li>
                <li><a href="aboutus.php">About</a></li>
                <li><a href="contactus.php">Contact</a></li>
                <li><a href="login.php">Account</a></li>
            </ul>
        </nav>
        <!-- <img src="../images/cart.png" class="cartIcon" alt=""> -->
    </div>


    <div class="container">
        <div style="text-align:center">
            <h2>Contact Us</h2>
            <p>Swing by for a cup of coffee, or leave us a message:</p>
        </div>
        <div class="row">
            <div class="column">
                <img src="../images/Logoimg.png" style="width:100%">
            </div>
            <div class="column">
                <form action="/action_page.php">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                    <label for="country">Country</label>
                    <select id="country" name="country">
                        <option value="australia">Australia</option>
                        <option value="canada">Canada</option>
                        <option value="usa">USA</option>
                    </select>
                    <label for="subject">Subject</label>
                    <textarea id="subject" name="subject" placeholder="Write something.."
                        style="height:170px"></textarea>
                    <a href="login.php"><input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>

</body>

</html>
