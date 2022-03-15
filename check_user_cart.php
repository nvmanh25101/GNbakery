<?php
session_start();
if(!isset($_SESSION['id'])) {
     echo 'Bạn không đủ quyền để truy cập';
    header('location:index.php');


}?>

    
