<?php  
    session_start();
    $id = $_POST['id'];
    $name = $_POST['name'];
    $pass = $_POST['password'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $connect = mysqli_connect('localhost','root','','GNbakery');
        if(!$connect){
            die("Kết nốt thất bại. Vui lòng kiểm tra lại các thông tin máy chủ.");
        };
    if($pass==""){
        $sql = "UPDATE customers SET address = '$address',phone = '$phone' WHERE id = '$id'";
        $result = mysqli_query($connect,$sql);
        $error = "Update successful !";
        header("location: update.php?error=$error");
    }else{
        if(strlen($pass) < 6){
            $errorpass = "Password must be at least 6 characters long"; 
            header("location:update.php?errorpass=$errorpass");
        }else{
            $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "UPDATE customers SET address = '$address',phone = '$phone',password = '$pass_hash' WHERE id = '$id'";
    
            $result = mysqli_query($connect,$sql);
            if(isset($result) > 0){
                $error = "Update successful !";
                header("location: update.php?error=$error");
            }else{
                $error1 = "Update failed";
                header("location: update.php?error1=$error1");
            }
        }
    }
    
?>