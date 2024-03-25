<?php

    if(isset($_POST["submit"])){
       $fullName = $_POST["name"];
       $email = $_POST["email"];
       $mobile = $_POST["mobile"];
       $username = $_POST["username"];
       $repeat = $_POST["repeat"];
       $password = $_POST["password"];

       require_once 'dbh.inc.php';
       require_once 'functions.inc.php';

       $emptyInput = emptyInputSignup($fullName,$email,$mobile,$username,$password,$repeat);
       $invalidUId = invalidUId($username);
       $invalidEmail = invaliedEmail($email);
       $pwdMatch = pwdMatch($password,$repeat);
       $uIdExists = uIdexists($conn, $username, $email);

       if($emptyInput !== false){
        header("Location:../signup.php?error=emptyInputs");
        exit();
       }

       if($invalidUId !== false){
        header("Location:../signup.php?error=InvalidUID");
        exit();
       }

       if($invalidEmail !== false){
        header("Location:../signup.php?error=invalidEmail");
        exit();
       }

       if($pwdMatch !== false){
        header("Location:../signup.php?error=DoesNotMatch");
        exit();
       }

       if($uIdExists !== false){
        header("Location:../signup.php?error=existsUID");
        exit();
       }

       createUser($conn,$fullName,$email,$mobile,$username,$password);


    }else{
        header('Location:../signup.php');
        exit();
    }


