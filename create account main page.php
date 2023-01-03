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
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="stylesheet" href="styles/service.css" />
    <link rel="stylesheet" href="styles/Account.css">

</head>
<body>

    <header>
            <?php
                include ('commonHeader.php')
            
            ?>

        </header>
    </head>
    <body>

        <!-- background image-->
        <div class="background">
            <!-- container -->
            <div class="text">
                <h1 style="font-size:50px"><u>Create account</u></h1>
                
                <div class="row">

                    <div class="column">
                        <div class="box">
                            <div class="iconsize">
                            <img src="B_USER.png" alt="Mike" style="width:100px; height=100px;">
							</div>
                            <div class="container">
                                <h2>Businuss Profile</h2>
                                <p class="title"><b>Business profile</b></p>
                                <p>Can Post Add</p>
                                <p>Apply the whateverCo.com advantages</p>
								<p>Innovative Ad Units</p>
								<p>Higher revenue</p>
								<p>Highest performance of your ads</p>
								<p>Track your performance in real-time</p>
                                <a href="download.php?file=Welcome to whateverCo Page.pdf">Click to downlord File</a>
                                <p><button class="button"><a href="CREATE BISSNUS ACCOUNT.php">Create Business account</a></button></p>
                            </div>
                        </div>
                    </div>

                    <div class="column">
                        <div class="box">
						 <div class="iconsize">
                            <img src="C_USER.png" alt="service_mail" style="width:100px; height=300px;">
							</div>
                            <div class="container">
                                <br/>

                                 <h2>Genaral User Profile</h2>
                                <p class="title"><b>User profile</b></p>
                                <p>Get all services</p>
                                <p>Filter out your choises</p>
								<p>Daily upadate profile</p>
								<p>More discount</p>
								<p>Have more services</p>
								<p>Unlimited hotel serious</p>
								<p>Track your performance in real-time</p>
                                <a href="download.php?file=Welcome to whateverCo Page.pdf">Click to downlord File</a>
                                <p><button class="button"><a href="CREATE USER ACCOUNT.php">Create Business account</a></button></p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>


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
                    <img src="pictures/facebook.png" alt="Facebook" class="social" height="20" width="20">
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
            Designed by : 1.2 Group 6
        </div>

    </div>
</div>
</body>
                    </html>
