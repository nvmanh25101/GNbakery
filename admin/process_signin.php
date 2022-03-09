<?php
    session_start();
    if(isset($_POST['btnSignin'])){
        $email = $_POST['email'];
        $pass = $_POST['password']; 
        
        require '../database/connect.php';
        $sql = "SELECT * FROM admin where email = '$email'";
        $result = mysqli_query($connect,$sql);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $id = $row['id'];
            $name = $row['name'];
            $image = $row['image'];
            $level = $row['level'];
            $pass_hash = $row['password'];
            if(password_verify($pass,$pass_hash)){
                $_SESSION['id'] = $id;
                $_SESSION['name'] = $name;
                $_SESSION['level'] = $level;
                $_SESSION['image'] = $image;
                header("location:./products/index.php");
            }else{
                
                $error = "Sai tài khoản hoặc mật khẩu";
                header("location:index.php?error=$error");
            }
        }
        else{
            $error = "Sai tài khoản hoặc mật khẩu";
            header("location:index.php?error=$error");
        }
    }else{
        header("location:index.php");
    }
    
?>