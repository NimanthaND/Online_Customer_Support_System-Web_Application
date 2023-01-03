<?php
include_once 'config.php';
?>
<?php 
if (isset($_POST ['submit']))
{
$pic= $_FILES["pic"]["name"];
$target = "file/".basename($pic);
$HName= $_POST["hotelName"];
$category= $_POST["category"];
$location= $_POST["location"];
$price= $_POST["price"];
$discription= $_POST["discription"];
$Picture= $_FILES["picture"]["name"];
$target = "file/".basename($Picture);
$video= $_FILES["videos"]["name"];
$target = "file/".basename($video);
$blog= $_FILES["blog"]["name"];
$target = "file/".basename($blog);



$sql = "insert into services(serviceID,pic,companyName,category,location,price,description,video,blogs)
values('','$pic','$HName','$category','$location','$price','$discription','$video','$blog')";
if(mysqli_query($conn,$sql))
{
    echo"<script>alert('Successful Submition')</script>";
}
else{
    echo"<script>alert('Error in connection')</script>";
}

    $target_dir = "R_uploads/";
    $target_file = $target_dir . basename($_FILES["pic"]["name"]);
    if(isset($_FILES["pic"])) 
{
    if (move_uploaded_file($_FILES["pic"]["tmp_name"],$target_file)){
            header("location:");
    } 
    else {
    echo "Error uploading your file."; 
    }
}else{
echo "File not available"; 
}

$target_dir = "R_uploads/";
$target_file = $target_dir . basename($_FILES["picture"]["name"]);
if(isset($_FILES["picture"])) 
{
if (move_uploaded_file($_FILES["picture"]["tmp_name"],$target_file)){
    header("location:");
} 
else {
echo "Error uploading your file."; 
}
}else{
echo "File not available"; 
}

$target_dir = "R_uploads/";
$target_file = $target_dir . basename($_FILES["videos"]["name"]);
if(isset($_FILES["videos"])) 
{
if (move_uploaded_file($_FILES["videos"]["tmp_name"],$target_file)){
    
} 
else {
echo "Error uploading your file."; 
}
}else{
echo "File not available"; 
}

$target_dir = "R_uploads/";
$target_file = $target_dir . basename($_FILES["blog"]["name"]);
if(isset($_FILES["blog"])) 
{
if (move_uploaded_file($_FILES["blog"]["tmp_name"],$target_file)){
   
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

