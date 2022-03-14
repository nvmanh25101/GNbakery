<?php

session_start();
if(!isset($_SESSION['level'])) {
    $_SESSION['error'] = 'Bạn chua dang nhap';
    header('location:./index.php');
    exit();
}