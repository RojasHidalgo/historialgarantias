<?php
    $localHost = "";
    $username = "";
    $password = "";
    $databaseName = ""

    $conn = new mysqli($localHost, $username, $password, $databaseName);
    $conn->set_charset("utf8");
    if($conn->connect_error){
        echo $error -> $conn->connect_error;
    }
?>