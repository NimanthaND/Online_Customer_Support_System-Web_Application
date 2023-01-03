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

        </title>
        <link rel="stylesheet" href="styles/userAcc.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    </head>

    <body>
        <input type="checkbox" id="check">

        <header>
            <label for="check">
                <i class="fas fa-bars" id="slidebar_btn"></i>
            <div class="leftA">
                <h3>Whatever.Co</h3>
            </div>

            <div class="rightA">
                <a href="logout.php" class="logout_btn">Logout</a>
            </div>
        </header>


        <!--sidebar-->
        <div class="sidebar">
            <?php
            $uname = $_SESSION['email'];
            $sql1 = "SELECT * FROM b_account_details WHERE email like '$uname'";
            $result = $conn ->query($sql1);
            if ($result -> num_rows > 0){
                while ($row = $result -> fetch_assoc()){
                    echo"<center>
                        <img src='C_uploads/" .$row['Image']."' class='profile_pic' alt='profile picture'>
                        <h4>".$row['C_Name']."</h4>
                    </center>";
                }
            }
            
            ?>
            <a href="BusinessUserAcc.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
            <a href="#"><i class="fas fa-cogs"></i><span>Components</span></a>
            <a href="#"><i class="fas fa-table"></i><span>Tables</span></a>
            <a href="main page.php"><i class="fas fa-circle"></i><span>About</span></a>
            <a href="deleteBacc.php"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
        </div>
        <?php
        $uname = $_SESSION['email'];
        $sql = "SELECT * FROM b_account_details WHERE email like '$uname'";
        $result = $conn ->query ($sql);
        if ($result ->num_rows > 0){
            while($row = $result-> fetch_assoc()){
                echo "<div class='contentA'>";
                    echo "<div class='userD'><span>UserName :".$row['C_Name']."</span></div>";
                    echo"<div class='userD'><span>Email :".$row['email']."</span></div>";
                    echo"<div class='userD'><span>Phone Number 1 :".$row['CPhone1']."</span></div>";
                    echo"<div class='userD'><span>Phone Number 2 :".$row['CPhone2']."</span></div>";
                    echo"<div class='userD'><span>Address 1 :".$row['CAddress1']."</span></div>";
                    echo"<div class='userD'><span>Address 2 :".$row['CAddress2']."</span></div>";
                    echo"<div class='userD'><span>Agent Name :".$row['A_name1']."</span></div>";
                    echo"<div class='userD'><span>Agent Phone number :".$row['A_Phone']."</span></div>";
                    echo"<br>";
                    echo"<br>";
                    echo"<a href='blogs.php' style='text-decoration:none;'>
                    <div class='AddBtn'>Add blogs</div></a>";
        
                    echo"<a href='Posting Adds.html' style='text-decoration:none;'>
                    <div class='AddBtn'>Post An ad</div></a>";

                    echo"<a href='REGISTER SERVICE.php' style='text-decoration:none;'>
                    <div class='AddBtn'>Register your service</div></a>";
                echo"</div>";
            }
        }
        else{
            echo"<script>alert('No such records..')</script>";
        }
        ?>
        <!--
        <div class="contentA">
            <div class="userD"><span>UserName :</span></div>
            <div class="userD"><span>Email :</span></div>
            <div class="userD"><span>Phone Number 1 :</span></div>
            <div class="userD"><span>Phone Number 2 :</span></div>
            <div class="userD"><span>Address 1 :</span></div>
            <div class="userD"><span>Address 2 :</span></div>
            <div class="userD"><span>Agent Name :</span></div>
            <div class="userD"><span>Agent Phone number :</span></div>
            <br><br>
            <a href="blogs.php" style="text-decoration:none;">
            <div class="AddBtn">Add blogs</div></a>

            <a href="postAd.php" style="text-decoration:none;">
            <div class="AddBtn">Post An ad</div></a>
        </div>-->
    </body>
</html>