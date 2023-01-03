<!DOCTYPE html>
<html>
    <head>
        
        <link rel="stylesheet" href="styles/style.css"> 
        <link rel="stylesheet" href="styles/img.css"> 
        <link rel="stylesheet" href="styles/text.css"> 
        
    </head>
    <body>
        <!--Header-->
        <div class="header">
            <div class="header-content">
              <div class="header-content 1">
                  <div><img src="pictures/logo.png" alt="logo" height="100" width="100"></div>
                  <div><h3 class="headerh3" color = "white">WhateverCo.com</h3></div>
                  
              </div>
                <div class = "header-content2">

                <?php
                    if(isset($_SESSION['email'])){
                      ?>
                          <a href="logout.php" style="text-decoration: none;">
                              <div class="headerbt"><b>LogOut</b></div></a>
                          <a href="USER PROFILE CHECK.php">
                              <img src="pictures/guest-512.png" alt ="guest" width="50" height="50" class="profile">
                          </a>
                      <?php
                    }
                    else{
                      ?>
                          <a href="create account main page.php" style="text-decoration: none;">
                              <div class="headerbt"><b>Sign In</b></div></a>
                          <a href="accountType.html" style="text-decoration: none;">
                              <div class="headerbt"><b>Login</b></div></a>

                      <?php
                    }
                    ?>
                
              </div>
            </div>
          </div>
        <!--//Header--> 


        <!--Navigation bar-->
        <ul class="main">
          <li class="main"><a href = "main page.php" class="nav">Home</a></li>
          <li class="main"><a href = "service.php" class="nav">Customer service</a></li>
          <li class="main"><a href = "Contact Page.php" class="nav">Contact</a></li>
          <li class="dropdown">
            <a href="" class="nav"">Companies</a>
            <div class="dropdown-content">
              <a href="#" class="nav">Link 1</a>
              <a href="#" class="nav">Link 2</a>
              <a href="#" class="nav">Link 3</a>
              <a href="#" class="nav">Link 3</a>
            </div>
        </ul>

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