<?php  
    session_start();
    $email = $_POST['email'];
    $name = $_POST['name'];
    $pass = $_POST['password'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    echo $name;
    echo $email;
    
?>