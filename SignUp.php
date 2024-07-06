<?php require_once("includes/db_connect.php");
     include_once("templates/header.php");
     include_once("templates/nav.php");


if(isset($_POST["SignUp"])){

  $fullname=mysqli_real_escape_string($conn,$POST["fullname"]);
  $username=mysqli_real_escape_string($conn,$POST["username"]);
  $emailAddress=mysqli_real_escape_string($conn,$POST["emailAddress"]);
  $gender=mysqli_real_escape_string($conn,$POST["genderId"]);
  $role=mysqli_real_escape_string($conn,$POST["roleId"]);
  $passphrase=mysqli_real_escape_string($conn,$POST["passphrase"]);

//Verify email format
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
header("Location:?wrong_email_format");
exit();
}

//verify authorized email domain(gmail.com)
//verify password and repeat password are identical
//verify the password length is between 8-16
// verify the new email does not exist already
//verify the new username does not exist already in the database
//verify that the fullname contains only letters and a space and aquotation symbol


}
?>


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
<input type="text" name="fullname"id="fullname"maxlength="50"placeholder="Fullname" required><br>

<label for ="Username"><b>Username:</b></label>
<input type="text" name="Username" maxlength="10" id="username"placeholder="Username" required><br>

<label for ="email"><b>EmailAddress:</b></label>
<input type="email"name="email"maxlength="20"id="email"placeholder="Email Address"required><br>

<?php if(isset($_GET["wrong_email_format"])){print "<span class='error_form'>wrong email format</span>";}?>

<label for=genderId>Gender:</label>
<select name=genderId id="genderId"required>
  <option value="">---Select Gender--</option>
<?php
  $sel_gen="SELECT* FROM`gender`ORDER BY gender ASC";
  $Sel_gen_res=$conn->query($sel_gen);
  while($sel_gen_row = $sel_gen_res->fetch_assoc()){
?>
<option value="<?php print $sel_gen_row["genderId"];?>"><?php print $sel_gen_row["gender"];?></option>
<?php }?>

</select>
<br>

<label for=roleId>Role:</label>
<select name=roleId id="roleId"required>
  <option value="">--Select Role-</option><br>
<?php
  $sel_role="SELECT*FROM`role`ORDER BY role ASC";
  $Sel_role_res=$conn->query($sel_role);
  while($sel_role_row = $sel_role_res->fetch_assoc()){
?>
<option value="<?php print $sel_gen_row["roleId"];?>"><?php print $sel_gen_row["role"];?></option>
<?php
  }?>
</select>
<br>
<!----->
<label for="password"><b>Password:</b></label>
<input type="password"name="passphrase"id="password"placeholder="Password" required><br>


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
<p class="note">Already have an account?<a href="SignIn.php">SignIn</a></p>
</div>
</body>

<?php require_once("templates/footer.php");?>

