<?php
    include_once "config.php"
    
?>
<?php
    session_start()
?>
<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = stripcslashes($username);
    $password = stripcslashes($password);
    

    

    $sql = "SELECT * FROM b_account_details where email = '$username' and Password = '$password'";

    $result = $conn ->query($sql);
        if ($result ->num_rows > 0){
            while($row = $result -> fetch_assoc()){
                if ($row['email'] == $username && $row['Password'] == $password ){
                    $_SESSION['email'] = $username;
                    $_SESSION['Password'] = $password;
                    echo "<script>alert('login success')</script>";
                    header("location:BusinessUserAcc.php");
                    
                    
                }
                else{
                    
                    //header("location:businessUserLogin.php");
                    echo "<script>alert('login fail ')</script>";
                }
            }
        }
            
    

    
?>




