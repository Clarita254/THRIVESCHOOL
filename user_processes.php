<?php

//Start the session service
session_start();
//Import the database connection
require_once("includes/db_connect.php");

include_once("templates/header.php");

include_once("templates/nav.php");

//Signup process
if(isset($_POST["SignUp"])){
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

//SignIn process
if(isset($_POST["signIn"])){

   //Variable declaration
   $entered_UserName=mysqli_real_escape_string($conn,addslashes($_POST["Username"]));
   $entered_Password=mysqli_real_escape_string($conn,addslashes($_POST["password"]));

   //Verify is the entered username matches any record
   $spot_username="SELECT*FROM signup WHERE Username ='entered_Username'LIMIT 1";


   //Executing the select query
   $userName_res=$conn->query($spot_username);

   //Count at least one matching row
   if($userName_res->num_rows>0){
      //Create a session
      $_SESSION["control"]=$userName_res->fetch_assoc();

      //Use the session to fetch the stored password
      $stored_password=$_SESSION["control"]["password"];

      //Verify if the entered_password is identical to the stored_password
      if(password_verify($entered_password,$stored_password)){
         //If the two passwords match,red-direct to view_respinses.php
         header("Location:view_responses.php");
         exit();
      }
      else{
         //Otherwise destroy the control session and re-direct back to SignIn.php
         unset($_SESSION["control"]);
         header("Location:SignIn.php");
         exit();
         
        
      }
   } else{
//Otherwise re-direct back to SignIn.php
      header("Location:SignIn.php");
     exit();
      }

   }

?>