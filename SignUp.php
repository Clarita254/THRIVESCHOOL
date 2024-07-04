<?php require_once("includes/db_connect.php");?>

<?php include_once("templates/header.php");?>
<?php include_once("templates/nav.php");?>
   

<?php require_once("includes/db_connect.php");?>


<body>
    
<form action="action_page.php"style="border:1px solid #ccc">
    <div class="container">
<div id=SignUp-h2>      
<h1> Sign Up </h1>
<div>

<p id="SignUp-Form-label">Please fill in this form to create an account </p>
   
<hr>

<label for ="fullname"><b>Fullname</b></label>
<input type="text"placeholder="fullname"name="fullname"required>

<label for ="Username"><b>Username</b></label>
<input type="text"placeholder="Username"name="Username"required><br>
       
<label for ="email"><b>Email</b></label>
<input type="text"placeholder="Email Address"name="email"required>

<label for="userType"><b>UserType</b></label>
<input type="userType" placeholder="userType"name = "userType" required><br>



<!----->
<label for="password"><b>Password</b></label>
<input type="password" placeholder="Password"name = "password" required><br>


<label for ="password-repeat"><b>Repeat Password</b></label>
<input type="password" placeholder="Repeat Password"name="password-repeat"required>


<input type="checkbox"checked="checked"name="remember"style="margin-bottom:15px">Remember me </label>
<p>By creating an account you agree to our<a href="SignUp.php" style="color:dodgerblue">Terms and Privacy</a></p>

<div class="clearfix">
    <button type="button" class="cancelbutton">Cancel</button>
    <button type="submit" class="signUpbutton">SignUp</button>
 </div>
 </div>
 </form>
<p class="account-info">Already have an account?<a href="SignIn.php">SignIn</a></p>
    
</body>

<?php require_once("templates/footer.php");?>

