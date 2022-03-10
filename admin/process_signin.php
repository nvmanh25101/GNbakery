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
<<<<<<< HEAD
                $_SESSION['error'] = "Sai tài khoản hoặc mật khẩu";
                header("location:index.php");
            }
        }
        else{
            $_SESSION['error'] = "Sai tài khoản hoặc mật khẩu";
            header("location:index.php");
=======
                
                $error = "Sai tài khoản hoặc mật khẩu";
                header("location:index.php?error=$error");
            }
        }
        else{
            $error = "Sai tài khoản hoặc mật khẩu";
            header("location:index.php?error=$error");
>>>>>>> 35f34e2b7173f54882a19d220d6f4817ea19c46b
        }
    }else{
        header("location:index.php");
    }
    
?>