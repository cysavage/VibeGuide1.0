<?php

function emptyInputSignup($firstname, $lastname, $email, $username, $password, $passrepeat) {
    $result;
    if(empty($firstname)|| empty($lastname)|| empty($email)|| empty($username)|| empty($password)|| empty($passrepeat)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
//check again
function InvalidUserid($username) {
  $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function InvalidEmail($email) {
    $result;
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function PasswordMatch($password,$passrepeat) {
    $result;
    if($password !== $passrepeat){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function UseridExists($conn, $username, $email) {
    $sql = "SELECT * FROM users WHERE userid = ? OR email = ?;";
    $stmt = mysqli_stmt_init($conn);
    
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../signup.php?error=stmtFailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt,"ss",$username,$email);
    mysqli_stmt_execute($stmt);
    
    $resultData = mysqli_stmt_get_result($stmt);
    
    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result =false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}
function createUser($conn, $firstname, $lastname, $email, $userid, $password) {
    $sql = "INSERT INTO users(firstName,lastName,email,userid,password) VALUES(?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../signup.php?error=stmtFailed");
        exit();
    }
    
    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
    
    mysqli_stmt_bind_param($stmt,"sssss",$firstname, $lastname, $email, $userid, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}