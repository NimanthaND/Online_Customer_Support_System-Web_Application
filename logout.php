<?php
    session_start();
    session_destroy();
    echo"<script>alert('See you again')</script>";
    header("location:main page.php");
?>