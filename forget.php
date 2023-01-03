<?php
include('config.php');
session_start();
if(isset($_POST['change'])){

   $name=$_POST['txtn'];
   $email=$_POST['txte'];
   $pwd=md5($_POST['txtp']);

   $query="SELECT *FROM logintab where name='$name' AND email='$email'";

   $result=mysqli_query($conn,$query);
   $num=mysqli_fetch_array($result);
   if($num>0){
       mysqli_query($conn,"update logintab set password='$pwd' WHERE email='$email' AND name='$name'");
       $_SESSION['email']=$email;
       header('location:headlog.php');
    }
   else
   {
    echo"<script>alert('something wrong ');</script>";
   }
}

   ?>
   
   <!DOCTYPE html>
   <html lang="en">
   <head>
        <title>
            Blogs
        </title>

        <!--Style sheets-->
        
        <link rel="stylesheet" href="styles/style.css"> 
        <link rel="stylesheet" href="styles/img.css"> 
        <link rel="stylesheet" href="styles/text.css"> 
        <link rel="stylesheet" href="styles/styleee.css">


        <!--script sheets-->
        <script type="text/javascript" src="java script/script.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8dwRTMZSF7sWT_7UaP76uMvpGV7Mj_Us&callback=myMap"></script>


    </head>
    <body>
    
    <header>
            <?php
                include ('commonHeader.php')
            
            ?>

        </header>

     



      
        <hr>
       

   <form method="post" action="">
      
       <center>
     <h3> FORGET<h3>
    <p>Name</p> 
    <input type="text" name="txtn" placeholder="name">
       <p> Email</p>
        <input type="email" name="txte" placeholder="myemail@gmail.com"><br><br>

        <p> New password</p>
        <input type="password" name="txtp" placeholder="password"><br><br>

        <input type="submit" name="change" value="Reset"><br>
        <center>   
</form>

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