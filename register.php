<?php

    $firstname= $_POST["firstname"];
    $lastname= $_POST["lastname"];
    $email= $_POST["email"];
    $password= $_POST["password"];
    
    //Database connection
    $conn = new mysqli("localhost", "", "", "register");
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
        }else{
        $stmt = $conn-> prepare("insert into registration(firstname, lastname, email, password) values(?,?,?,?)");
        
        $stmt->bind_param("ssss",$firstname,$lastname,$email,$password);
        $stmt->execute();
        echo "Your registartion succeed...Please close this tab";
        $stmt->close();
        $conn->close();
        }
    ?>
