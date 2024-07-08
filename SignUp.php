<?php 

require_once("includes/db_connect.php");
include_once("templates/header.php");
include_once("templates/nav.php");

if(isset($_POST["SignUp"])){
  //To preserve data in the form use $SESSION[]
  $SESSION["fullname"]=$fullname = mysqli_real_escape_string($conn, $_POST["fullname"]);
  $SESSION["username"] =$username = mysqli_real_escape_string($conn, $_POST["username"]);
  $SESSION["emailAddress"] =$emailAddress = mysqli_real_escape_string($conn, $_POST["emailAddress"]);
  $SESSION["password"]=$password = mysqli_real_escape_string($conn, $_POST["password"]);
  $SESSION["roleId"]=$role = mysqli_real_escape_string($conn, $_POST["roleId"]);
  $SESSION["genderId"]=$gender = mysqli_real_escape_string($conn, $_POST["genderId"]);
  $SESSION["Confirmpassword"]=$gender = mysqli_real_escape_string($conn, $_POST["Confirmpassword"]);
  


  // Verify email format
  if(!filter_var($emailAddress, FILTER_VALIDATE_EMAIL)){
    $SESSION["wrong_email_format"]="wrong Email format";
    //There shouldn't be an error
    $SESSION["error"]=" ";
  }

//verify authorized email domain(gmail.com)

$val_dom=["gmail.com"];
$em_arr=explode("@",$emailAddress);
$spot_dom=end($em_arr);
if(!in_array($spot_dom,$val_dom)){

 $SESSION["invalid_dom"]="Invalid email domain".$spot_dom;
 $_SESSION["error"]="";
}
//verify password and repeat password are identical
if($password!=$ConfirmPassword) {
  header("Location:SignUp.php");
  exit();
}
//encrypting password
$hash_password=password_hash($ConfirmPassword,PASSWORD_DEFAULT);
    

//verify the password length is between 8-16
// verify the new email does not exist already
//verify the new username does not exist already in the database


//verify that the fullname contains only letters and a space and aquotation symbol

if(ctype_alpha(str_replace("","",str_replace("\'","",$fullname)))===FALSE){

$_SESSION["nameLetter_err"]="wrong name format";
$_SESSION["error"]="";
}

//Inserting data into SignUp table
//The if(isset($_SESSION["error"] - checks if there is error when data is inserted
if(isset($_SESSION["error"])){
$user_insert="INSERT INTO `users` (fullname,username,emailAddress,password,roleId,genderId)VALUES('$fullname','$username','$emailAddress','$password','$role','$gender')";

//executing the sql query
if($conn->query($user_insert)===TRUE){
  header("Location:SignUp.php");
  exit();
}else{
  die("Failed to insert new record".$conn->error);
}
}
}
?>
  <style>
    h1 {
      text-align: center;
      margin-bottom: 20px;
      color: white;
    }
    p {
      display: block;
      margin-bottom: 5px;
      font-size:large;
      color: black;
    }

    p1{
      font-size:large;
      font-weight:bold;
    }
    
  </style>
<body>
  <div class="header">
    <h1> Sign Up </h1> 
  </div>

  <div class="containerSignUp">
    <form action="" method="POST">
      <p1>Please fill in this form to create an account </p1>
      <hr>
      <label for="fullname"><b>Fullname:</b></label>
      <input type="text" name="fullname" id="fullname" maxlength="50" placeholder="Fullname" required <?php if(isset($_SESSION["fullname"])){?> value="<?php print $_SESSION["fullname"]; unset($_SESSION["fullname"]);?>" <?php } ?> autofocus><br>
      <?php if(isset($_SESSION["nameLetter_err"])){print '<span class="error_form">'.$SESSION["nameLetter_err"].'</span>';unset($_SESSION["nameLetter_err"]);}?>


      <label for="username"><b>Username:</b></label>
      <input type="text" name="username" maxlength="10" id="username" placeholder="Username" required <?php if(isset($_SESSION["username"])){?> value="<?php print $_SESSION["username"]; unset($_SESSION["username"]);?>" <?php } ?>><br>

      <label for="email"><b>EmailAddress:</b></label>
      <input type="email" name="emailAddress" maxlength="50" id="emailAddress" placeholder="Email Address" required <?php if(isset($_SESSION["emailAddress"])){?> value="<?php print $_SESSION["emailAddress"]; unset($_SESSION["emailAddress"]);?>" <?php } ?>><br>

      <?php if(isset($_SESSION["wrong_email_format"])){print '<span class="error_form">'.$_SESSION["wrong_email_format"].'</span>';unset($_SESSION["wrong_email_format"]);}?>

      <label for="genderId">Gender:</label>
      <select name="genderId" id="genderId" required>
        <option value="">---Select Gender---</option>
        <?php
        $sel_gen = "SELECT * FROM `gender` ORDER BY gender ASC";
        $sel_gen_res = $conn->query($sel_gen);
        while($sel_gen_row = $sel_gen_res->fetch_assoc()){
        ?>
        <option value="<?php print $sel_gen_row["genderId"];?>"><?php print $sel_gen_row["gender"];?></option>
        <?php }?>
      </select>
      <br>

      <label for="roleId">Role:</label>
      <select name="roleId" id="roleId" required>
        <option value="">---Select Role---</option>
        <?php
        $sel_role = "SELECT * FROM `role` ORDER BY role ASC";
        $sel_role_res = $conn->query($sel_role);
        while($sel_role_row = $sel_role_res->fetch_assoc()){
        ?>
        <option value="<?php print $sel_role_row["roleId"];?>"><?php print $sel_role_row["role"];?></option>
        <?php }?>
      </select>
      <br>

      <label for="password"><b>Password:</b></label>
      <input type="password" name="password" id="password" maxlength="16" placeholder="Password" required  <?php if(isset($_SESSION["password"])){?> value="<?php print $_SESSION["password"]; unset($_SESSION["password"]);?>" <?php } ?>><br>

      <label for="confirmpassword"><b>Confirm Password:</b></label>
      <input type="password" name="confirmpassword" id="confirmpassword" maxlength="16" placeholder="Confirm Password" required><br>

      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      <br>
      <p>By creating an account you agree to our <a href="SignUp.php" style="color:dodgerblue;"> Terms and Privacy</a></p>

      <div class="clearfix">
        <button type="button" class="cancelbutton">Cancel</button>
        <button type="submit" name="SignUp" class="signupbutton">Sign Up</button>
      </div>
    </form>
  </div>

  <div class="account-info">
    <p class="note">Already have an account? <a href="SignIn.php">Sign In</a></p>
  </div>
</body>


<?php require_once("templates/footer.php");?>
