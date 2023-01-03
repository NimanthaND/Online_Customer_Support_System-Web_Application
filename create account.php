<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Create account
        </title>

        <!--Style sheets-->
        <link rel="stylesheet" href="styles/style.css"> 
        <link rel="stylesheet" href="styles/img.css"> 
        <link rel="stylesheet" href="styles/text.css"> 


        <!--script sheets-->
        <script type="text/javascript" src="java script/script.js"></script>
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


        <hr />
        <h1 align="center">CREATE ACCOUNT</h1>
        <h4 align="center">Join us to enjoy exclusive privileges and rewards</h4>
        <hr />
        <center>
            <form action="https://courseweb.sliit.lk/" method="post" class="CreateAform">
                <div class="DP">
                    <img src="User DP.png" alt="Profile Picture" class="image">
                </div>
                <lable><b>Title*</b></lable>
                <div class="hor">
                    <select>
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
                    <select>
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
                    <select>
                        <option>Month</option>
                        <option value="32">01</option>
                        <option value="33">02</option>
                        <option value="34">03</option>
                        <option value="35">04</option>
                        <option value="36">05</option>
                        <option value="37">06</option>
                        <option value="38">07</option>
                        <option value="39">08</option>
                        <option value="40">09</option>
                        <option value="41">10</option>
                        <option value="42">11</option>
                        <option value="43">12</option>
                    </select>

                    <select>
                        <option>Year</option>
                        <option value="44">2000</option>
                        <option value="45">2001</option>
                        <option value="46">2002</option>
                        <option value="47">2003</option>
                        <option value="48">2004</option>
                        <option value="49">2005</option>
                        <option value="50">2006</option>
                        <option value="51">2007</option>
                        <option value="52">2008</option>
                        <option value="53">2009</option>
                        <option value="54">2010</option>
                        <option value="55">2011</option>
                        <option value="56">2012</option>
                        <option value="57">2013</option>
                        <option value="58">2014</option>
                    </select>
                </div>

                <label><b>Phone Number * </b></label>
                <input type="text" placeholder="Phone Number" name="number" required />

                <label><b>Address * </b></label>
                <input type="text" placeholder="Address" name="adrs" required />

                <label><b>Country * </b></label>
                <div class="hor">
                    <select>
                        <option value="59">Austria</option>
                        <option value="60">Aland Island</option>
                        <option value="61">Belgium</option>
                        <option value="62">Brzil</option>
                        <option value="63">Canada</option>
                        <option value="64">Sri Lanka</option>
                    </select>
                </div>

                <label><b>Password * </b></label>
                <input type="password" placeholder="Password" name="pass1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" required />

                <p>
                    <font color="red">

                        * Your password must contain at least six characters, with a combination of English letters (a - z, A - Z) and numeric digits (0 - 9). At least one of the characters must be a numeric digit.

                    </font>
                </p>
                <label>
                    <b>confirm password *</b>
                </label>
                <input type="password" placeholder="Password" name="pass1" required />
                <section style="width:500px;">
                    <input type="checkbox" checked="checked" name="team" required />
                    I have read and agree to<a href="" class="team"> Terms and Conditions </a>, the <a href="" class="team"> Privacy Policy</a> and the <a href="" class="team">Cookies Policy</a>.
                </section>
                <button value="submit" class="but" name="submit" style="background-color:green;">Create My Account</button>
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
              Designed by: 1.2 Group 6
                </div>

            </div>
        </div>
    </body>
    </html>
    
