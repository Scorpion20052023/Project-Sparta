<?php

include 'connect.php';

if(isset($_POST['signup'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $password=md5($password);

    $checkEmail="SELECT * From users where email='$email'";
    $result=$conn->query($checkEmail);
    if($result->num_rows>0){
        echo "Email already exists!!";
    }
    else{
        $insertQuery="INSERT INTO users(username,password,email)
                            VALUES ('$username','$password','$email')";
            if($conn->query($insertQuery)==TRUE){
                header("location: index.php");
            }
            else{
                echo "Error:".$conn->error;
            }
    }
}


if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $password=md5($password);

    $sql="SELECT * FROM users WHERE email='$email' and password='$password'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['email']=$row['email'];
        header("Location: dashboard.php");
        exit();
    }
    else{
        echo "Not Found! Incorrect Email or Password!!";
    }

}

?>