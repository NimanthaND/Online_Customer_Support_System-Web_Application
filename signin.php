<?php
    session_start();
?>
<?php
include('config.php');
if(isset($_POST['submit'])){

   $name=$_POST['txtn'];
   $email=$_POST['txte'];
   $pwd=$_POST['txtp'];

   $query="INSERT INTO logintab(name,email,password)values('$name','$email','$pwd')";
   $reult=mysqli_query($conn,$query);
 
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="styles/style.css"> 
<link rel="stylesheet" href="styles/styleee.css">
<body>
<header>
            <?php
                include ('commonHeader.php')
            
            ?>

        </header>

     



      
        <hr>


<form method="post" action="">

    <center>
    <h1> SIGN-IN</h1>
    <b><p>NAME</p><b>
    <input type="text" name="txtn" placeholder="name" >
    <b><p> EMAIL</p> <b>
    <input type="email" name="txte" placeholder="myemail@gmail.com">

    <p>PASSWORD</p>
    <input type="password" name="txtp" placeholder="password"><br><br>

    <input type="submit" name="submit" value="submit">

</form>
<center>

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
