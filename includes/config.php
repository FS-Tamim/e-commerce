<?php
    $db_host="localhost";
    $db_user="root";
    $db_password="";
    $db_name="shopping";
    $conn=mysqli_connect($db_host,$db_user,$db_password,$db_name);
    //connection check
    if(!$conn){
        die("Connection failed");
    }else{
        echo "Connection Successful";
    }
?>