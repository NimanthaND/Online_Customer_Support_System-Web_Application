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
        


        <!--script sheets-->
        <!--<script type="text/javascript" src="/java script/pictures.js"></script>-->
<style>

.colm{

width: 25%;

float:left;
margin-bottom:40px;
margin-top:40px;

}



.abcd::after{

content: "";

display: table;

clear: both;

}



.abcd{

height: auto;

}



.picinner{

width: 100px;

height: 100px;

border-radius: 50px;

object-fit: cover;

transition: 0.6s;

}



.ref:hover{

transform: scale(1.5);

color: blue;

font-weight: 200;

font-size: large;

}
    </Style>

    </head>
    <body>

      
    <header>
            <?php
                include ('commonHeader.php')
            
            ?>

        </header>

      
        <hr>
   
        <img src=""  id="image" class="main-image">
        <script>
            let image = document.getElementById("image");
            let images = ['serv1.jpg','serv2.jpg','serv3.jpg']
            setInterval(function(){
            let random = Math.floor(Math.random() * 3);
            image.src = images[random];
            },1100);
        </script>


   <br>
   <div class="abcd">



<div class="colm">

<center><a href="companyPage.php" style="text-decoration:none;" class="ref">

<img src="pictures/eme.png" class="picinner" ><br> HOTEL RESERVATION <br></img></a>

</center>

</div>



<div class="colm">

<center><a href="Customer Support.php" style="text-decoration:none;" class="ref">

<img src= "pictures/bok.png" class="picinner"><br> CUSTOMER SUPPORT <br></img></a>

</center>

</div>



<div class="colm">

<center><a href="" style="text-decoration:none;" class="ref">

<img src="pictures/help.png" class="picinner"><br> TICKET RESERVATION <br></img></a>

</center>  

</div>



<div class="colm">

<center><a href="emergency service.php" style="text-decoration:none;" class="ref">

<img src="pictures/tik.png" class="picinner"><br> EMERGENCY <br></img></a>  

</center>  

</div>



</div>


<hr>

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
