<?php
    session_start();
    if(isset($_POST['btnSignin'])){
        $email = $_POST['email'];
        $pass = $_POST['password']; 
        $connect = mysqli_connect('localhost','root','','GNbakery');
        if(!$connect){
            die("Kết nốt thất bại. Vui lòng kiểm tra lại các thông tin máy chủ.");
        };
        $sql = "SELECT * FROM admin where email = '$email'";
        $result = mysqli_query($connect,$sql);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $id = $row['id'];
            $name = $row['name'];
            $img = $row['image'];
            $level = $row['level'];
            $pass_hash = $row['password'];
            if(password_verify($pass,$pass_hash)){
                $_SESSION['id'] = $id;
                $_SESSION['name'] = $name;
                $_SESSION['level'] = $level;
                $_SESSION['img'] = $img;
                header("location:./products/index.php");
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