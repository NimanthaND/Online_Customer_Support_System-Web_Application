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
    <link rel="stylesheet" href="styles/Register.css">
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
    <h1 align="center">REGISTER SERVICE</h1>
    <h4 align="center">Join us to enjoy exclusive privileges and rewards</h4>
    <p>
    <hr />
    <center>
        <section>
        <form action="Rsubmit.php" method="POST" enctype="multipart/form-data">
            <lable><b>Select Company Picture*</b></lable>
            <input type="file" name="pic">
            <lable><b>Company Name *</b></lable>
            <input type="text" name="hotelName">
                
            <lable><b>SELECT CATEGORY</b></lable>
            <br/>
        <select name="category">
        <option value="Business Hotels">Business Hotels </option>
        <option value="Airport Hotels">Airport Hotels </option>
        <option value="Resort Hotels">Resort Hotels </option>
        <option value="Suite Hotels"> Suite Hotels </option>
        </select>
        <br/>
            <lable><b>SELECT LOCATION</b></lable>
            <br/>
        <select name="location">
        <option value="Austria">Austria </option>
        <option value="Australia">Australia </option>
        <option value="Brazil">Brazil </option>
        <option value="Canada"> Canada </option>
        <option value="China">China </option>
        <option value="Denmark">Denmark </option>
        <option value="Egypt">Egypt </option>
        <option value="Iceland">Iceland </option>
        </select>
        </br>
<lable><b>Price</b></lable>
<input type="number" name="price">
</br>
<lable><b>Discription*</b></lable>
<div width="100%" height="50%">
<textarea cols="75" rows="5" name="discription"></textarea>
</div>
<br/>
                    
                    <lable><b>Upload Picture*</b></lable>
                    <br/>
                        <input type="file" name="picture">
                        <br/>
                        <lable><b>Upload Videos*</b></lable>
                        <input type="file" name="videos">
                        <br/>
                        <lable><b>Upload Blogs*</b></lable>
                        <input type="file" name="blog">
                        <br/>
              
<input type="checkbox" checked="checked" name="team" required/>
I have read and agree to<a href="" class="team"> Terms and Conditions </a>, the <a href="" class="team"> Privacy Policy</a> and the <a href="" class="team">Cookies Policy</a>.

<button value="submit" class="but" name="submit"  style="background-color:green;">Register my service</button>
<br/>
<button type="button" class="but" style="background-color:red;">Cancel</button>
<br/>
</td>
</form>
</section>

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