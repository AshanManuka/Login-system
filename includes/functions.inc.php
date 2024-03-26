<?php

    function emptyInputSignup($fullName,$email,$mobile,$username,$password,$repeat){
        if(empty($fullName) || empty($email) || empty($mobile) || empty($username) || empty($password) || empty($repeat)){
            $result = true;
            return $result;
        }else{
            $result = false;
            return $result;
        }
    }

    function invalidUId($username){
        if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
            $result = true;
            return $result;
        }else{
            $result = false;
            return $result;
        }
    }


    function invaliedEmail($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $result = true;
            return $result;
        }else{
            $result = false;
            return $result;
        }
    }

    function pwdMatch($password,$repeat){
        if($password !== $repeat){
            $result = true;
            return $result;
        }else{
            $result = false;
            return $result;
        }
    }


    function uIdexists($conn, $username, $email){
        $sql = "SELECT * FROM user WHERE userName = ? OR userEmail = ?;";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location:../signup.php?error=stmtError");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "ss", $username, $email);
        mysqli_stmt_execute($stmt);
        $resultData = mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($resultData)){
            return $row;
        }else{
            return false;
        }
        mysqli_stmt_close($stmt);
    }

    function createUser($conn,$fullName,$email,$mobile,$username,$password){
        $sql = "INSERT INTO user (userFullName, userEmail, userName, userPassword) VALUES (?,?,?,?);";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location:../signup.php?error=stmtError");
            exit();
        }

        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ssss", $fullName, $email, $username, $hashedPwd);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        header("Location:../signup.php?error=none");

    }

    function emptyInputLogin($username,$password){
        if(empty($username) || empty($password)){
            return true;
        }else{
            return false;
        }
    }

    function loginUser($conn,$username,$password){

        $sql = "SELECT * FROM user WHERE userName = ?;";
        $stmt = mysqli_stmt_init($conn);

        if(! mysqli_stmt_prepare($stmt,$sql)){
            header("Location:../login.php?error=stmtError");
            exit();
        }

        mysqli_stmt_bind_param($stmt,"s",$username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $fetchData = mysqli_fetch_assoc($result);

        if(! $fetchData){
            header("Location:../login.php?error=NotFound");
            exit();
        }

        mysqli_stmt_close($stmt);

        $pwdHash = $fetchData["userPassword"];
        $checkPwd = password_verify($password,$pwdHash);

        if($checkPwd === true){
            session_start();
            $_SESSION["userId"] = $fetchData["userId"];
            $_SESSION["userName"] = $fetchData["userName"];
            $_SESSION["userFullName"] = $fetchData["userFullName"];
            header("Location: ../index.php?error=LoginSuccessfully");
        }else{
            header("Location: ../login.php?error=IncorrectPassword");
            exit();
        }
        
        






    }
