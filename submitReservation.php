<?php
    include_once 'config.php';
?>
<?php
    
    session_start();
?>
<?php
if(isset($_POST['submit'])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $NIC = $_POST["NIC"];
    $phone = $_POST["phone"];
    $aDate = $_POST["arrival"];
    $room = $_POST["room"];
    $dDate = $_POST["departure"];
    $payment = $_POST["payment"];

    $sql4 = "INSERT INTO reservation (reservationID,name,NIC,email,phone)
    VALUES ('','$name','$NIC','$email','$phone')";

    if (mysqli_query($conn,$sql4)){
        echo "<script>alert('Records added succesfully!!')</script>";
        header("location:companyPage.php");
    }
    else{
        echo "<script>alert('Error in reservation!!')</script>";
    }
}
    
    mysqli_close($conn);
?>