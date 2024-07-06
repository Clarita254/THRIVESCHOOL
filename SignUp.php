<?php require_once("includes/db_connect.php");?>

<?php include_once("templates/header.php");?>
<?php include_once("templates/nav.php");?>


<style>
h1{
text-align:centre;
margin-bottom:20px;
color:white;
}

p{
display:block;
margin-bottom:5px;
font-size: x-large;
color:black;

}
p1{
    font-size:large;
}

.header{
  padding: 20px;
  padding-bottom:10px;
  text-align: center;
  background-color:grey;
  margin-bottom:10px;

}


/*set a style for all buttons*/
button{
background-color:darkmagenta;
color:white;
padding:14px 20px;
margin:8px 0;
border:none;
cursor:pointer;
width: 30%;
opacity:0.9;
padding-left:20px;
box-sizing:border-box;
}
/*float cancel and signUp buttons and add an equal width*/
.cancelbutton,.signupbutton{
  float:left;
  width:calc(30%-5px);
  padding-bottom: 10px;
  padding-right:10px;
}

/*Extra styles for cancel button*/
.cancelbutton{
  padding:14px 20px;
  background-color:darkmagenta;
  padding-right:20px;
margin-right:10px;
}

/*Add padding to container elements*/
.containerSignUp{
  padding:16px;
  width:50%;
 margin:0 auto;
  padding:20px;
  background-color:#f5f5f5;
  border-radius:5px;
  border:2px solid lightseagreen;
  border-style: grooves;
}

    </style>
<body>

<div class="header">
<h1> Sign Up </h1> 
</div>

<div class="containerSignUp">
<form action="action_page.php">
    
<p>Please fill in this form to create an account </p>
   
<hr>

<label for ="fullname"><b>Fullname:</b></label>
<input type="text" name="fullname"id="fullname"placeholder="Fullname" required><br>

<label for ="Username"><b>Username:</b></label>
<input type="text" name="Username"id="username"placeholder="Username" required><br>

<label for ="email"><b>Email:</b></label>
<input type="email"name="email"id="Email"placeholder="Email Address"required><br>

<label for="userType"><b>UserType:</b></label>
<input type="text"name="userType"id="usertype" placeholder="userType" required><br>


<!----->
<label for="password"><b>Password:</b></label>
<input type="password"name="password"id="password"placeholder="Password" required><br>


<label for ="Confirm-password"><b>Confirm Password:</b></label>
<input type="password"name="confirm-password"id="confirm password"placeholder="Confirm Password"required><br>


<input type="checkbox"checked="checked"name="remember"style="margin-bottom:15px">Remember me </label><br>
<p1>By creating an account you agree to our <a href="SignUp.php" style="color:dodgerblue"> Terms and Privacy</a></p1>

<div class="clearfix">
    <button type="button" class="cancelbutton">Cancel</button>
    <button type="submit" class="signUpbutton">SignUp</button>
 </div>
 
 </form>
 </div>

 <div class="account-info">
<p1>Already have an account?<a href="SignIn.php">SignIn</a></p1>
</div>
</body>

<?php require_once("templates/footer.php");?>

