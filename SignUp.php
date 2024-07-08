<?php

require_once("includes/db_connect.php");
include_once("templates/header.php");
include_once("templates/nav.php");

$signup_message = ""; // Initialize message variable

if (isset($_POST["SignUp"])) {
    // Preserve data in the form using $_SESSION[]
    $_SESSION["fullname"] = $fullname = mysqli_real_escape_string($conn, $_POST["fullname"]);
    $_SESSION["username"] = $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $_SESSION["emailAddress"] = $emailAddress = mysqli_real_escape_string($conn, $_POST["emailAddress"]);
    $_SESSION["password"] = $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $_SESSION["roleId"] = $role = mysqli_real_escape_string($conn, $_POST["roleId"]);
    $_SESSION["genderId"] = $gender = mysqli_real_escape_string($conn, $_POST["genderId"]);
    $_SESSION["Confirmpassword"] = $ConfirmPassword = mysqli_real_escape_string($conn, $_POST["confirmpassword"]);

    $_SESSION["error"] = "";

    // Verify email format
    if (!filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {
        $_SESSION["wrong_email_format"] = "Wrong Email format";
        $_SESSION["error"] .= "wrong_email_format";
    }

    // Verify authorized email domain (gmail.com)
    $valid_domains = ["gmail.com"];
    $email_parts = explode("@", $emailAddress);
    $domain = end($email_parts);
    if (!in_array($domain, $valid_domains)) {
        $_SESSION["invalid_domain"] = "Invalid email domain: $domain";
        $_SESSION["error"] .= "invalid_domain";
    }

    // Verify password and confirm password are identical
    if ($password != $ConfirmPassword) {
        $_SESSION["password_mismatch"] = "Passwords do not match";
        $_SESSION["error"] .= "password_mismatch";
    }

    // Verify the password length is between 8-16 characters
    if (strlen($password) < 8 || strlen($password) > 16) {
        $_SESSION["password_length"] = "Password must be between 8 and 16 characters";
        $_SESSION["error"] .= "password_length";
    }

    // Check if email already exists
    $email_check_query = "SELECT * FROM users WHERE emailAddress='$emailAddress' LIMIT 1";
    $result = mysqli_query($conn, $email_check_query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION["email_exists"] = "Email already exists";
        $_SESSION["error"] .= "email_exists";
    }

    // Check if username already exists
    $username_check_query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
    $result = mysqli_query($conn, $username_check_query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION["username_exists"] = "Username already exists";
        $_SESSION["error"] .= "username_exists";
    }

    // If there are no errors, proceed with the insertion
    if (empty($_SESSION["error"])) {
        // Encrypting password
        $hash_password = password_hash($password, PASSWORD_DEFAULT);

        // Inserting data into SignUp table
        $user_insert = "INSERT INTO users (fullname, username, emailAddress, password, roleId, genderId) VALUES ('$fullname', '$username', '$emailAddress', '$hash_password', '$role', '$gender')";

        // Executing the SQL query
        if ($conn->query($user_insert) === TRUE) {
            $signup_message = "Thank you for signing up! You can now log in.";
            header("Location: SignUp.php");
            exit();
        } else {
            die("Failed to insert new record: " . $conn->error);
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
        font-size: large;
        color: black;
    }
    p1 {
        font-size: large;
        font-weight: bold;
    }
</style>
<body>
    <div class="header">
        <h1>Sign Up</h1> 
    </div>

    <div class="containerSignUp">
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
            <?php if (!empty($signup_message)): ?>
                <div class="message"><?php echo $signup_message; ?></div>
            <?php endif; ?>
            <p1>Please fill in this form to create an account </p1>
            <hr>
            <label for="fullname"><b>Fullname:</b></label>
            <input type="text" name="fullname" id="fullname" maxlength="50" placeholder="Fullname" required autofocus><br>

            <label for="username"><b>Username:</b></label>
            <input type="text" name="username" maxlength="10" id="username" placeholder="Username" required spellcheck="false"<?php if (isset($_SESSION["username"])) { ?> value="<?php print $_SESSION["username"]; unset($_SESSION["username"]); ?>" <?php } ?>><br>
            <?php if (isset($_SESSION["username_exists"])) { print '<span class="error_form">'.$_SESSION["username_exists"].'</span>'; unset($_SESSION["username_exists"]); } ?><br>

            <label for="email"><b>EmailAddress:</b></label>
            <input type="email" name="emailAddress" maxlength="50" id="emailAddress" placeholder="Email Address" required <?php if (isset($_SESSION["emailAddress"])) { ?> value="<?php print $_SESSION["emailAddress"]; unset($_SESSION["emailAddress"]); ?>" <?php } ?>><br>
            <?php if (isset($_SESSION["wrong_email_format"])) { print '<span class="error_form">'.$_SESSION["wrong_email_format"].'</span>'; unset($_SESSION["wrong_email_format"]); } ?>
            <?php if (isset($_SESSION["invalid_domain"])) { print '<span class="error_form">'.$_SESSION["invalid_domain"].'</span>'; unset($_SESSION["invalid_domain"]); } ?>
            <?php if (isset($_SESSION["email_exists"])) { print '<span class="error_form">'.$_SESSION["email_exists"].'</span>'; unset($_SESSION["email_exists"]); } ?><br>

            <label for="genderId">Gender:</label>
            <select name="genderId" id="genderId" required>
                <option value="">---Select Gender---</option>
                <?php
                $sel_gen = "SELECT * FROM `gender` ORDER BY gender ASC";
                $sel_gen_res = $conn->query($sel_gen);
                while ($sel_gen_row = $sel_gen_res->fetch_assoc()) {
                ?>
                <option value="<?php print $sel_gen_row["genderId"]; ?>"><?php print $sel_gen_row["gender"]; ?></option>
                <?php } ?>
            </select>
            <br>

            <label for="roleId">Role:</label>
            <select name="roleId" id="roleId" required>
                <option value="">---Select Role---</option>
                <?php
                $sel_role = "SELECT * FROM `role` ORDER BY role ASC";
                $sel_role_res = $conn->query($sel_role);
                while ($sel_role_row = $sel_role_res->fetch_assoc()) {
                ?>
                <option value="<?php print $sel_role_row["roleId"]; ?>"><?php print $sel_role_row["role"]; ?></option>
                <?php } ?>
            </select>
            <br>

            <label for="password"><b>Password:</b></label>
            <input type="password" name="password" id="password" maxlength="16" placeholder="Password" required <?php if (isset($_SESSION["password"])) { ?> value="<?php print $_SESSION["password"]; unset($_SESSION["password"]); ?>" <?php } ?>><br>
            <?php if (isset($_SESSION["password_length"])) { print '<span class="error_form">'.$_SESSION["password_length"].'</span>'; unset($_SESSION["password_length"]); } ?>

            <label for="confirmpassword"><b>Confirm Password:</b></label>
            <input type="password" name="confirmpassword" id="confirmpassword" maxlength="16" placeholder="Confirm Password" required><br>
            <?php if (isset($_SESSION["password_mismatch"])) { print '<span class="error_form">'.$_SESSION["password_mismatch"].'</span>'; unset($_SESSION["password_mismatch"]); } ?><br>

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
