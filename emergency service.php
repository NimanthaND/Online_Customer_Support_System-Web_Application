<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Emergency services 
        </title>

        <!--Style sheets-->
        
        <link rel="stylesheet" href="styles/emergency service.css">


        <!--script sheets-->
        <script type="text/javascript" src="/java script/script.js"></script>
        <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8dwRTMZSF7sWT_7UaP76uMvpGV7Mj_Us&callback=myMap"></script>


    </head>
    <body>

        <header>
            <?php
                include ('commonHeader.php')
            
            ?>

        </header>

      
        <hr>
        <h1><center>Emergency Services</center></h1>

        <div class="">

            <!--//Search bar-->
       <div class="topnav">
      
        <input type="text" class= "search1" placeholder="Search..">
      </div>

        </div>
        

    <center>
    <div class="abcd">

        <div class="colm">
        <center><a href="" style="text-decoration:none;" class="ref">
        <img src="pictures/agent.png" class="imgE"><br> Contact Agent <br></img></a> 
        </center>
        </div>

        <div class="colm">
        <center><a href="https://www.police.lk" style="text-decoration:none;" class="ref">
        <img src= "pictures/police.png" class="imgE"><br> Police <br></img></a> 
        </center>
        </div>

        <div class="colm">
        <center><a href="https://www.police.lk" style="text-decoration:none;" class="ref">
        <img src="pictures/Hospital.png" class="imgE"><br> Hospital <br></img></a> 
        </center>   
        </div>


    </div>  
</center>  
                
            <div>
            <div class="column">
                <!--//map -->
                <div id="googleMap" class= "emergencyMap"  ></div>
                <!--map-->
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




