<?php


$name = 'admin';
$email = 'admin@gmail.com';
$password = 'adminvjppro';
$image = "adminvjppro.jpg";
$phone = "0986971670";
$gender = 1;
$address = "Phú Xuyên - Hà Nội";
$level = 1;

require_once '../database/connect.php';

$password_hash = password_hash($password, PASSWORD_DEFAULT);
$sql = "insert into admin(name, image, email, password, phone, gender, address, level)
values(?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($connect, $sql);
if($stmt) {
    mysqli_stmt_bind_param($stmt, 'sssssisi', $name, $image, $email, $password_hash,$phone,$gender,$address, $level);
    mysqli_stmt_execute($stmt);
}
else {
    $_SESSION['error'] = 'Không thể chuẩn bị truy vấn!';
}


mysqli_stmt_close($stmt);
mysqli_close($connect);
