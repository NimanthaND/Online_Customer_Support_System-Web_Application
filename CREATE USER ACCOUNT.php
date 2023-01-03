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
    <h1 align="center">CREATE USER ACCOUNT</h1>
    <h4 align="center">Join us to enjoy exclusive privileges and rewards</h4>
    <hr />
    <center>
        <form action="submit.php" method="POST" enctype="multipart/form-data">
            <div class="DP">
                <img src="User DP.png" alt="Profile Picture" class="image">
            </div>
            <lable><b>Select uplord*</b></lable>
            <input type="file" name="fileFieldName">

            <br/>
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
            <label><b>First Name * </b></label>
            <input type="text" placeholder="First Name" name="fname" required />

            <label><b>Last Name * </b></label>
            <input type="text" placeholder="Last Name" name="lname" required />

            <label><b>Birthday * </b></label>
            <div class="hor">
                <select name="Date">
                    <option>Date</option>
                    <option value="1">01</option>
                    <option value="2">02</option>
                    <option value="3">03</option>
                    <option value="4">04</option>
                    <option value="5">05</option>
                    <option value="6">06</option>
                    <option value="7">07</option>
                    <option value="8">08</option>
                    <option value="9">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
                <select name="Month">
                    <option>Month</option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>

                <select name="Year">
                    <option>Year</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                </select>
            </div>

            <label><b>Phone Number * </b></label>
            <input type="text" placeholder="Phone Number" name="number" required />

            <label><b>Address * </b></label>
            <input type="text" placeholder="Address" name="address" required />

            <label><b>Country * </b></label>
            <div class="hor">
                <select name="Country">
                    <option value="Austria">Austria</option>
                    <option value="Aland Island">Aland Island</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Brzil">Brzil</option>
                    <option value="Canada">Canada</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                </select>
                </div>

                    <label><b>Password * </b></label>
                    <input type="password" placeholder="Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" required />
                    
                    <p>
                        <font color="red">

                            * Your password must contain at least six characters, with a combination of English letters (a - z, A - Z) and numeric digits (0 - 9). At least one of the characters must be a numeric digit.

                        </font>
                    </p>
                    <label>
                        <b>confirm password *</b></label>
                        <input type="password" placeholder="Password" name="pass1" required />
                     <section style="width:500px;">
                        <input type="checkbox" checked="checked" name="team" required/>
                        I have read and agree to<a href="" class="team"> Terms and Conditions </a>, the <a href="" class="team"> Privacy Policy</a> and the <a href="" class="team">Cookies Policy</a>.
                    </section>
                    <button value="submit" class="but" name="submit"  style="background-color:green;">Create My Account</button>
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
                    Designed by: 1.2 Group 6
                </div>

            </div>
            </div>
</body>
</html>