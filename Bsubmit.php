<?php
    session_start();
    include_once 'config.php';
?>
<?php
if (isset($_POST ['submit']))
{
 

    $Title= $_POST["title"];  
    $Cname=$_POST["cname"];  
    $cEmail=$_POST["cEmail"];
    $CAddress1=$_POST["Address1"];  
    $CAddress2=$_POST["Address2"]; 
    $CAddress3=$_POST["Address3"]; 
    $CPhone1=$_POST["number1"]; 
    $CPhone2=$_POST["number2"]; 
    $Aname1=$_POST["afname"]; 
    $Aname2=$_POST["alname"];  
    $APhone=$_POST["number3"]; 
    $Password= $_POST["password"]; 
    $image = $_FILES["fileFieldName"]["name"];
    $target = "file/".basename($image);


    $Bsql = "insert into b_account_details(BAcc_ID,Title,C_Name,email,CAddress1,CAddress2,CAddress3,CPhone1,CPhone2,A_name1,A_name2,A_Phone,Password,Image)values('','$Title','$Cname','$cEmail','$CAddress1','$CAddress2','$CAddress3','$CPhone1','$CPhone2','$Aname1','$Aname2','$APhone','$Password', '$image')";

    if(mysqli_query($conn,$Bsql))
    {
       
        //echo"<script>alert('Successful')</script>";
        $_SESSION['email'] = $cEmail;
        header("location:main page.php");
        exit;
        
    }
    else{
        echo"<script>alert('Error in your connection')</script>";
    }

    $target_dir = "C_uploads/";
    $target_file = $target_dir . basename($_FILES["fileFieldName"]["name"]);
    if(isset($_FILES["fileFieldName"])) 
    {
        if (move_uploaded_file($_FILES["fileFieldName"]["tmp_name"],$target_file))
        {
            header("location:");
        } 
        else {
            echo "Error uploading your file."; 
        }
    }
    else{
        echo "File not available"; 
    }
}

mysqli_close($conn);
?>
