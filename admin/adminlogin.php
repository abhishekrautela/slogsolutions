<?php
    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        include "../connect.php";
        $query = "SELECT * FROM adminlogin";
        $data = mysqli_query($connect,$query);
        $result = mysqli_fetch_assoc($data);
        if($result['username']==$username && $result['password']==$password)
        {
            session_start();
            $uid = time();
            $_SESSION['sid'] = $uid.$username;
            $_SESSION['uid'] = $uid;
            header("location:adminpanel.php");
        }
        else{
            header("location:../index.php");
        }
    }
    
?>