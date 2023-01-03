<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "whateverco";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn-> connect_error){
        die ("Connecton Failed :".$conn_connect_error);
    }
    
?>