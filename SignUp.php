<?php require_once("includes/db_connect.php");?>

<?php include_once("templates/header.php");?>
<?php include_once("templates/nav.php");?>


<style>
h1{
text-align:center;
margin-bottom:20px;
color:lightseagreen;
}

p{
display:block;
margin-bottom:5px;
font-size: large;
color:black;

}
p1{
    padding-bottom:20px;
}
    </style>
<body>
<div class="container">
<form action="action_page.php">
    
<div id=SignUp-h1>      
<h1> Sign Up </h1>
<div>

<p id="SignUp-Form-label">Please fill in this form to create an account </p>
   
<hr>

<label for ="fullname"><b>Fullname</b></label>
<input type="text" name="fullname"id="fullname"placeholder="Fullname" required><br><br>

<label for ="Username"><b>Username</b></label>
<input type="text" name="Username"id="username"placeholder="Username" required><br><br>

<label for ="email"><b>Email</b></label>
<input type="text"name="email"id="Email"placeholder="Email Address"required>

<label for="userType"><b>UserType</b></label>
<input type="text"name="userType"id="usertype" placeholder="userType" required><br>



<!----->
<label for="password"><b>Password</b></label>
<input type="password"name="password"id="password"placeholder="Password" required><br>


<label for ="Confirm-password"><b>Confirm Password</b></label>
<input type="password"name="confirm-password"id="confirm password"placeholder="Confirm Password"required>


<input type="checkbox"checked="checked"name="remember"style="margin-bottom:15px">Remember me </label>
<p>By creating an account you agree to our<a href="SignUp.php" style="color:dodgerblue">Terms and Privacy</a></p>

<div class="clearfix">
    <button type="button" class="cancelbutton">Cancel</button>
    <button type="submit" class="signUpbutton">SignUp</button>
 </div>
 
 </form>
 </div>
<p1 class="account-info">Already have an account?<a href="SignIn.php">SignIn</a></p1>
    
</body>

<?php require_once("templates/footer.php");?>

