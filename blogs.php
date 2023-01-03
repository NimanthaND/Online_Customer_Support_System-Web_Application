<?php
    include_once 'config.php';
?>
<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Blogs
        </title>

        <!--Style sheets-->
        
        <link rel="stylesheet" href="styles/style.css"> 
        <link rel="stylesheet" href="styles/img.css"> 
        <link rel="stylesheet" href="styles/text.css"> 


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




        <!--Blogs aniimation -->
        <div class= "animationRow" id="content-blogs" >
                <img src="pictures/blog1.jpg" class="blogsPage1" >
                <img src="pictures/blog2.jpg" class="blogsPage1" >
                <img src="pictures/blog3.jpg" class="blogsPage1" >
                <img src="pictures/blog4.jpg" class="blogsPage1" >
                <img src="pictures/blog5.jpg" class="blogsPage1" >
        </div>
        <h1 class="blogsh1">FEEL FREE TO READ</h1>

        <div class = "blogUpdateBtn">
            
    
            <a href = "addBlogs.php" style="text-decoration:none;" class="blogBtn" >Insert New Blog</a>
            
            <form method="POST" action="blogs.php" class="formClass" >
                <input type = "text" class="blogBtn" name="btitle" placeholder="serach name" style ="margin:0px;">
                <input type= "submit" name="bsearch" class = "ssubmit" value = "search" style ="margin:0px;"> 
            </form>
        </div>



        <!--Blog content-->
    <?php

    if (isset($_POST["bsearch"])){
        $sresult = $_POST["btitle"];
        $sql = "SELECT * FROM blogs where blogName like '%$sresult%' ";
        $result = $conn ->query($sql);
        if ($result ->num_rows > 0){
            while($row = $result -> fetch_assoc()){
                echo " <center>";
                    echo "<div class='blog_content'>";
                        echo "<div class='blog_row'>";
                            echo "<div class='blog_column'>";
                                echo "<div class='blog_content_column'>";
                                    echo "<img src='uploaded_pics/".$row['picture']."' class='blogImg'>";
                                        echo "<div class='postContent'>";
                                            echo "<h2 class='blogH' id='name'>".$row['blogName']."</h2>";
                                            echo "<i class='far fa-user'>".$row['author']."</i>";
                                            echo "&nbsp;" ;
                                            echo "<i class='far calendar'>March 31 2000</i>";
                                            echo "<p class='blogP'>".$row['description']."</p>";
                                            echo" <a href='' class='blogbtn' onclick ='blogFun();'>Read more</a>";
                                        echo "</div>";
                                    echo "</div>";
                                echo "</div>" ;
                         echo"</div>";
                    echo "</div>";
                echo"</center>";
            }
        }
        else{
            echo "<script>alert('no records')</script>";
            header("location:blogs.php");
        }
    }
    
    else{
        $sql = "SELECT * FROM blogs";
        $result = $conn ->query($sql);
        if ($result -> num_rows > 0){
        while ($row = $result -> fetch_assoc()){
            echo " <center>";
                echo "<div class='blog_content'>";
                    echo "<div class='blog_row'>";
                        echo "<div class='blog_column'>";
                            echo "<div class='blog_content_column'>";
                                echo "<img src='uploaded_pics/".$row['picture']."' class='blogImg'>";
                                    echo "<div class='postContent'>";
                                        echo "<h2 class='blogH' id='name'>".$row['blogName']."</h2>";
                                        echo "<i class='far fa-user'>".$row['author']."</i>";
                                        echo "&nbsp;" ;
                                        echo "<i class='far calendar'>March 31 2000</i>";
                                        echo "<p class='blogP'>".$row['description']."</p>";
                                        echo" <a href='file/".$row['file']."'download class='blogbtn' >Donload</a>";
                                        
                                    echo "</div>";
                                echo "</div>";
                            echo "</div>" ;
                        echo"</div>";
                    echo "</div>";
             echo"</center>";
            }
        }
    }

    ?> <!--
        <center>
    
       <div class="blog_content">

           <div class="blog_row">

                

                
               <div class="blog_column">

                    <div class="blog_content_column">
                        <img src="" class="blogImg">
                        <div class="postContent">
                            <a href="" class="blogHeading"><h2 class="blogH"></h2></a>
                            <i class="far fa-user"></i>
                            &nbsp;
                            <i class="far calendar">March 31 2000</i>
                            <p class="blogP"></p>

                            <a href="" class="blogbtn">Read more</a>
                        </div>
                    </div>
               </div>

            </div>
        </div>
    </center> -->
    
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
