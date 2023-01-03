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
    

    <!--//Navigation bar-->
    <hr />
    <!--head part cration -->
    <h1 align="center">CREATE BUSSNISS ACCOUNT</h1>
    <h4 align="center">Join us to enjoy exclusive privileges and rewards</h4>
    <hr />
    <center>

        <!--form area-->
		
		<form action="Bsubmit.php" method="POST" enctype="multipart/form-data">
            <div class="DP">
                <img src="Bussnuss.jpg" alt="Profile Picture" class="image" >
            </div>
			  <lable><b>Select upload*</b></lable>
            <input type="file" name="fileFieldName">
            <lable><b>Title*</b></lable>
            <div class="hor">
                <select name="title">
                    <option class="custom">Mr</option>
                    <option>Ms</option>
                    <option>Mrs</option>
                    <option>Sir</option>
                    <option>Dr</option>
                    <option>Mdm</option>
                </select>
            </div>
			
            <label><b>Company Name * </b></label>
            <input type="text" placeholder="Company Name" name="cname" required />

            <label><b>Email * </b></label>
            <input type="text" placeholder="Company Email" name="cEmail" required />

            <label><b>Address 1* </b></label>
            <input type="text" placeholder="Address Line 1" name="Address1" required />

            <label><b>Address 2 </b></label>
            <input type="text" placeholder="Address Line 2" name="Address2"  />

            <label><b>Address 3 </b></label>
            <input type="text" placeholder="Address Line 3" name="Address3"  />

           
            <label><b>Company offical Phone Number 1* </b></label>
            <input type="text" placeholder="Agent Phone Number" name="number1" required />

            <label><b>Company offical Phone Number 2* </b></label>
			<input type="text" placeholder="Agent Phone Number" name="number2" required />
            

            <label><b>Agent First Name * </b></label>
            <input type="text" placeholder="Agent First Name" name="afname" required />

            <label><b>Agent Last Name * </b></label>
            <input type="text" placeholder="Agent secound Name" name="alname" required />

            <label><b>Agent personal phone number * </b></label>
			<input type="text" placeholder="Agent Phone Number" name="number3" required />
           
  
          
                    <label><b>Password * </b></label>
                    <input type="password" placeholder="Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" required />
                    
                    <p>
                        <font color="red">

                            * Your password must contain at least six characters, with a combination of English letters (a - z, A - Z) and numeric digits (0 - 9). At least one of the characters must be a numeric digit.

                        </font>
                    </p>
                    <label>
                        <b>confirm password *</b></label>
                        <input type="password" placeholder="Password" name="pass2" required />
                     <section style="width:500px;">
                        <input type="checkbox" checked="checked" name="team" required/>
                        Our company have read and agree to<a href="" class="team"> Terms and Conditions </a>, the <a href="" class="team"> Privacy Policy</a> and the <a href="" class="team">Cookies Policy</a>.
                    </section>
                    <button value="submit" class="but" name="submit"  style="background-color:green;">Create Company Account</button>
                    <button type="button" class="but" style="background-color:red;">Cancel</button>

                </div>
           

</form>
    </center>
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