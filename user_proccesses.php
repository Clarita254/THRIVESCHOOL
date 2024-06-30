<?php
require_once("includes/db_connect.php");

include_once("templates/header.php");

include_once("templates/nav.php");

//Signup process
if(isset($_POST["signup"])){
    //Variable declaration
    $fullName=mysqli_real_escape_string($conn,addslashes($_POST["fullname"]));
    $UserName=mysqli_real_escape_string($conn,addslashes($_POST["Username"]));
    $EmailAddress=mysqli_real_escape_string($conn,addslashes($_POST["EmailAddress"]));
    $UserType=mysqli_real_escape_string($conn,addslashes($_POST["UserType"]));
    $Password=mysqli_real_escape_string($conn,addslashes($_POST["password"]));
    $RepeatPassword=mysqli_real_escape_string($conn,addslashes($_POST["Repeat Password"]));
    
    //Verifying if the password and the confirm password are similar
    if($password!=$RepeatPassword) {
        header("Location:SignUp.php");
        exit();
    }
     
    //Encrypting the password
    $hash_password=password_hash($RepeatPassword,PASSWORD_DEFAULT);
    
    //inserting data into SignUp table
    $user_insert="INSERT INTO signup(fullname,Username,EmailAddress,UserType,password,datecreated)VALUES('$fullName','$UserName','$EmailAddress','$UserType','$password_hash',UNIX_TIMESTAMP())";

     //Executing the sql query
     if($conn->query($user_insert)===TRUE){
        header("Location:SignIn.php");
        exit();
     }else{
        die("Failed to insert the new record".$conn->error);
     }
     
     
     
}
?>