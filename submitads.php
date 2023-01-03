<?php
    session_start();
    include_once "config.php";
?>

<?php
    if(isset($_POST['adsubmit'])){
        $owner = $_POST["name"];
        $oMail = $_POST["email"];
        $web = $_POST["web"];
        $logo = $_FILES["logo"]["name"];
        $img = $_FILES["image"]["name"];
        $desc = $_POST["description"];
        $vid = $_FILES["video"]["name"];
        $logotarget = "uploaded_pics/".basename($logo);
        $imgtarget = "uploaded_pics/".basename($img);
        $videotarget = "video/".basename($vid);
    }

    $adsql = "INSERT INTO advertiestment (adID,owner, email, webadd, logo, image, description, video)
        values('', '$owner', '$oMail', '$web', '$logo', '$img', '$desc', '$vid')";


        if(mysqli_query($conn, $adsql)){
            echo "<script>alert('Advertiestment added succesfully!!')</script>";
            
            
        }
        else{
            echo "<script>alert('Error!!')</script>";
        }
        if(move_uploaded_file($_FILES['image']['tmp_name'],$imgtarget)){
            echo "<script>alert('Image added successfully!!')</script>";
        }
        else{
            echo "<script>alert('Error in image uploading!!')</script>";
        }

        if(move_uploaded_file($_FILES['logo']['tmp_name'],$logotarget)){
            echo "<script>alert('logo added successfully!!')</script>";
        }
        else{
            echo "<script>alert('Error in logo uploading!!')</script>";
        }
        if(move_uploaded_file($_FILES['video']['tmp_name'],$videotarget)){
            echo "<script>alert('video added successfully!!')</script>";
        }
        else{
            echo "<script>alert('Error in video uploading!!')</script>";
        }

?>