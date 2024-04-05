<?php
    include('connection.php'); 
    if (isset($_POST['login']))
    { 
        $username = $_POST['username'];  
        $password = $_POST['password'];
        
            //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
        
        $sql = "SELECT * FROM admin_login WHERE username = '$username' and pass = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);
        if($count == 1){  
            echo "<script type='text/javascript'>
            alert('Login Successful');
            window.location.href='Admin.php';
            </script>";
            session_start();
        }  
        else{  
            echo "<script type='text/javascript'>alert('Login Failed');window.location.href='index_n.php';</script>"; 
        }
    }
?>