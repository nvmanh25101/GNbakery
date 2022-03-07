<?php
    
        $email= $_POST['email'];
        $name = $_POST['name'];
        $pass = $_POST['password'];
        $connect = mysqli_connect('localhost','root','','GNbakery');
        if(!$connect){
            die("Kết nốt thất bại. Vui lòng kiểm tra lại các thông tin máy chủ.");
        };
        $sqlEmail = "SELECT * FROM customers WHERE email = '$email' ";
        $resultEmail = mysqli_query($connect,$sqlEmail);
        if(mysqli_num_rows($resultEmail) > 0){
            $error = "Email already exists. Please enter another email"; 
            header("location:signup.php?error=$error");
        }else{
            if(strlen($pass) < 6){
                $errorpass = "Password must be at least 6 characters long"; 
                header("location:signup.php?errorpass=$errorpass");
            }else{
                $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
                $sqlInsert="INSERT INTO customers(name,email,password) VALUES('$name','$email','$pass_hash')";
        
                $resultInsert = mysqli_query($connect,$sqlInsert);
                if(isset($resultInsert) > 0){
                    header("location: signin.php");
                }else{
                    $errorpass = "Registration failed";
                    header("location: signup.php?errorpass=$errorpass");
                }
            }
        }
        mysqli_close($connect);
    
?>