<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />

    <title>
        Main page
    </title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/Tharushi.css">
    <link rel="stylesheet" href="styles/Account.css">
    <script>
        alert("Welcome to the Whatever.com");
    </script>
</head>
<body>

<header>
            <?php
                include ('commonHeader.php')
            
            ?>

        </header>
    

   
    <center>
    <hr />
    <h1 align="center">REMOVE ACCOUNT DETAILS</h1>
    <h4 align="center">Join us to enjoy exclusive privileges and rewards</h4>
    <hr />
    <div style="height:100%; width:100%;">
<form method="POST" action="EDIT USER ACCOUNT.php";

<label><b>Please enter your details hear...</b></label>
<br/>
<br/>
<br/>
<label><b>First Name * </b></label>
<input type="text" placeholder="First Name" name="name" required />

<label><b>Password * </b></label>
<input type="password" placeholder="Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" required />

<input type="submit" name="submit" style="background-color:red; border-radious:10px;">
 </form>
</center>
</form>
<div>
  <!--Footer-->
  <div class="footer">

<div class="footer-column">
    <div class="footer-content">

        <div class="content">
            <ul type="none">

                <li class="font"><b><font size="4">Service</font></b></li>
                <li class="font">
                    Customer service
                </li>
                <li class="font">
                    Reservation
                </li>
                <li class="font">
                    Blogs
                </li>
                <li class="font">
                    Search Companies
                </li>
            </ul>

            <ul type="none">

                <li class="font"><b><font size="4">Contact Us</font></b></li>
                <li class="font">
                  
                    Call : +94 77 3283 832
                </li>
                <li class="font">
                    Mail : whateverCo@gmail.com
                </li>
                <li class="font">
                    Address : 46, Colombo, Sri Lanka
                </li>
                
            </ul>
            <ul type="none">

                <li class="font"><b><font size="4">Service</font></b></li>
                <li class="font">
                    Customer service
                </li>
                <li class="font">
                    Reservation
                </li>
                <li class="font">
                    Blogs
                </li>
                <li class="font">
                    Search Companies
                </li>
            </ul>
        </div>
        
        <div class="links">
            <a href="http://www.facebook.com">
            <img src="pictures/facebook.png" alt="Facebook" class="social" height="20" width="20" >
            </a>

            <a href="http://www.twitter.com">
            <img src="pictures/Twitter.png" alt="Twitter" class="social" height="20" width="20">
            </a>

            <a href="http://www.instagram.com">
            <img src="pictures/insta.png" alt="instagram" class="social" height="20" width="20">
            </a>

            <a href="http://www.linkedin.com">
            <img src="pictures/LinkedIn.jpg" alt="LinkedIn" class="social" height="20" width="20">
            </a>
        </div>
        
        
    </div>


    <div class="footer-bottom">
        Designed by: 1.2 Group 6
    </div>

</div>
</div>
</body>
</html>