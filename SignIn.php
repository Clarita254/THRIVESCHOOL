
<?php require_once("includes/db_connect.php");
 include_once("templates/header.php");
include_once("templates/nav.php");
  
  
  
  
  //SignIn process
if(isset($_POST["signIn"])){

    //Variable declaration
    $entered_UserName=mysqli_real_escape_string($conn,addslashes($_POST["username"]));
    $entered_Password=mysqli_real_escape_string($conn,addslashes($_POST["password"]));
 
    //Verify is the entered username matches any record
    $spot_username="SELECT*FROM users WHERE Username ='$entered_Username'LIMIT 1";
 
 
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
    <style>

        body{
background-image: url(Images/Background/bb2.jpg);
        }

        .header-h{
            color:lightseagreen;
            font-size:large;
        }
    </style>

<body>
<div class= "header-h">
    <h1>SignIn</h1>
</div>
       
    
<div class="SignIn">
<form action=""method="">

<div class="imgcontainer">
<img src="Images/People/img_avatar2.png"alt="Avatar"class="avatar">
<img src="Images/People/img_avatar6.png"alt="Avatar"class="avatar">
</div>

<div class="container">
<label for="username"><b>Username:</label>
<input type="text"placeholder="Enter Username" name="username"required><br>

<label for="password"><b>Password:</label>
<input type="password"placeholder="Enter Password"name="password"required>
<label>
    <input type="checkbox"checked="checked"name="remember">Remember me
</label>

<button type="submit">Login</button>

<button type="button" class="cancelbutton">Cancel</button>
    <span class="password"><a href="#">Forgot Password?</a></span>



    </div>

 
</form>
</div>

<div class="container">
<?php require_once("templates/footer.php");?>
<div>

 