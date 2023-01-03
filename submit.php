<?php
session_start();
include_once 'config.php';
?>
<?php 
if (isset($_POST ['submit']))
{
$Title= $_POST["title"];
$FName= $_POST["fname"];
$LName= $_POST["lname"];
$Date= $_POST["Date"];
$Month= $_POST["Month"];
$Year= $_POST["Year"];
$Phone= $_POST["number"];
$Address= $_POST["address"];
$Country= $_POST["Country"];
$Password= $_POST["password"];
$image = $_FILES["fileFieldName"]["name"];
$target = "fils/".basename($image);

$sql = "insert into account_details(Acc_ID,Title,First_Name,Last_Name,Date,Month,Year,Phone_number,Address,Country,Password,Image)values('','$Title','$FName','$LName','$Date','$Month','$Year','$Phone','$Address','$Country','$Password','$image')";
if(mysqli_query($conn,$sql))
{
    
    echo"<script>alert('Successful Submition')</script>";
}
else{
    echo"<script>alert('Error in connection')</script>";
}

    $target_dir = "C_uploads/";
    $target_file = $target_dir . basename($_FILES["fileFieldName"]["name"]);
    if(isset($_FILES["fileFieldName"])) 
{
if (move_uploaded_file($_FILES["fileFieldName"]["tmp_name"],$target_file)){
        header("location:BusinessUserAcc.php");
} 
else {
echo "Error uploading your file."; 
}
}else{
echo "File not available"; 
}
}
mysqli_close($conn);

?>

