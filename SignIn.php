
<?php
require_once("includes/db_connect.php");
include_once("templates/header.php");
include_once("templates/nav.php");



// SignIn process
if (isset($_POST["signIn"])) {

    // Variable declaration
    $entered_UserName = mysqli_real_escape_string($conn, $_POST["username"]);
    $entered_Password = mysqli_real_escape_string($conn, $_POST["password"]);

    // Verify if the entered username matches any record
    $spot_username = "SELECT * FROM users WHERE Username = '$entered_UserName' LIMIT 1";

    // Executing the select query
    $userName_res = $conn->query($spot_username);

    // Check if at least one matching row is found
    if ($userName_res->num_rows > 0) {
        // Fetch the user record
        $user_record = $userName_res->fetch_assoc();

        // Use the fetched record to get the stored password
        $stored_password = $user_record["password"];

        // Verify if the entered password is identical to the stored password
        if (password_verify($entered_Password, $stored_password)) {
            // If the passwords match, create a session
            $_SESSION["user"] = $user_record;

            // Redirect to index.php
            header("Location:index.php");
            exit();
        } else {
            // Otherwise, display an error message for incorrect password
            $login_error = "Incorrect password. Please try again.";
        }
    } else {
        // Otherwise, display an error message for username not found
        $login_error = "Username not found. Please try again.";
    }
}
?>

<style>
    body {
        background-image: url(Images/Background/bb2.jpg);
    }
    .header-h {
        color: lightseagreen;
        font-size: large;
    }
    .Sign, p {
        font-size: medium;
        font-weight: bold;
    }
    .message {
        color: red;
    }
</style>

<body>
    <div class="header-h">
        <h1>SignIn</h1>
    </div>

    <div class="SignIn">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <?php if (!empty($login_error)) : ?>
                <div class="message"><?php echo $login_error; ?></div>
            <?php endif; ?>

            <div class="imgcontainer">
                <img src="Images/People/img_avatar2.png" alt="Avatar" class="avatar">
                <img src="Images/People/img_avatar6.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="username"><b>Username:</b></label>
                <input type="text" placeholder="Enter Username" name="username" required><br>

                <label for="password"><b>Password:</b></label>
                <input type="password" placeholder="Enter Password" name="password" required><br>

                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>

                <button type="submit" name="signIn">Login</button>
                <button type="button" class="cancelbutton">Cancel</button>
                <span class="password"><a href="#">Forgot Password?</a></span>
            </div>
        </form>
        <p class="account-info">Don't have an account? <a href="SignUp.php">Sign Up</a></p>
        
    </div>

    <div class="container">
        <?php require_once("templates/footer.php"); ?>
    </div>
</body>
