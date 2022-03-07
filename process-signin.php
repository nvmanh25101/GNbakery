<?php
    if(isset($_POST['btnSignin'])){
        $email = $_POST['email'];
        $pass = $_POST['password']; 
        $connect = mysqli_connect('localhost','root','','GNbakery');
        if(!$connect){
            die("Kết nốt thất bại. Vui lòng kiểm tra lại các thông tin máy chủ.");
        };
        $sql = "SELECT * FROM customers where email = '$email'";
        $result = mysqli_query($connect,$sql);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $pass_hash = $row['password'];
            if(password_verify($pass,$pass_hash)){
                $_SESSION['isLogInOk'] = $customer;
                header("location:index.php");
            }else{
                $error = "Incorrect account or password ";
                header("location:signin.php?error=$error");
            }
        }
        else{
            $error = "Incorrect account or password ";
            header("location:signin.php?error=$error");
        }
    }else{
        header("location: signin.php");
    }
    
?>