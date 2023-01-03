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
                          <a href="BusinessUserAcc.php">
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
    </body>
</html>