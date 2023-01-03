<?php
    include_once 'config.php';
?>

<?php

    if (isset($_POST ['submit'])) {
        

        $title = $_POST["title"];
        $author = $_POST["author"];
        $des = $_POST["description"];
        //$content = $_POST["content"];
        $image = $_FILES["image"]["name"];
        $target = "uploaded_pics/".basename($image);
        $document= $_FILES["doc"]["name"];
        $target = "file/".basename($document);

        $sql = "INSERT INTO blogs (blogID, blogName, author,description, picture, file)
        values('', '$title', '$author', '$des', '$image', '$document')";

        if(mysqli_query($conn, $sql)){
            echo "<script>alert('Records added succesfully!!')</script>";
            header("location:blogs.php");
            
        }
        else{
            echo "<script>alert('Error!!')</script>";
        }
        if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
            echo "<script>alert('Image added successfully!!')</script>";
        }
        else{
            echo "<script>alert('Error in image uploading!!')</script>";
        }
        if(move_uploaded_file($_FILES['doc']['tmp_name'],$target)){
            echo "<script>alert('Document added successfully!!')</script>";
        }
        else{
            echo "<script>alert('Error in document uploading!!')</script>";
        }

    }  
    mysqli_close($conn); 
?>
