<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Main page
        </title>

        <!--Style sheets-->
        
        <link rel="stylesheet" href="styles/style.css"> 
        <link rel="stylesheet" href="styles/img.css"> 
        <link rel="stylesheet" href="styles/text.css"> 


        <!--script sheets-->
        <script type="text/javascript" src="script.js"></script>
        <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8dwRTMZSF7sWT_7UaP76uMvpGV7Mj_Us&callback=myMap"></script>


    </head>
    <body>

    <header>
            <?php
                include ('commonHeader.php')
            
            ?>

        </header>


      
        <hr>
      <!--//Navigation bar-->


      <!--Image slide show-->

      <img src=""  id="image" class="main-image">



       <!--Content-->
        <div class="mainContent">
            
                <div class="maincolumn">
                    <h2 class="contentC">ABOUT US</h2>
                    <p class="mainP">WhateverCo.com is a platform which provide support and assist which you need in your day to day journies.
                        we have provide you to access to reservation, customer care in tourism industry as well as you can read Blogs
                        from one platform
                    </p>
                </div>

                <div class="maincolumn">
                    <h2 class="contentC">WHAT WE DO</h2>
                    <p class="mainP">WhateverCo.com is a platform which provide support and assist which you need in your day to day journies.
                        we have provide you to access to reservation, customer care in tourism industry as well as you can read Blogs
                        from one platform
                    </p>
                </div>

                <div class="maincolumn">
                    <h2 class="contentC">WHY SHOULD USE</h2>
                    <p class="mainP">WhateverCo.com is a platform which provide support and assist which you need in your day to day journies.
                        we have provide you to access to reservation, customer care in tourism industry as well as you can read Blogs
                        from one platform
                    </p>
                </div>
            
        </div>


        <!--Blogs-->
        <h1 class="blogsClass">Blogs</h1>
        <a href="blogs.php" >
            <img src="" class="blogs" id="content-blogs">
            
        </a> 
        


        <!--Map-->
      <div id="googleMap" style="width:100%;height:400px;"></div>
    
        




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
                    &copy; Designed by: 1.2 Group 6
                </div>

            </div>
            </div>
</body>
</html>
