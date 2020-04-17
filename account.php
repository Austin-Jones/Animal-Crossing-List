<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>
 <?php require 'header.php';?>
    <div class="c-card p-3">
        <p class="display-4">Account</p>
        <form>
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" disabled value="<?php echo htmlspecialchars($_SESSION["username"]);?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" disabled value="<?php echo htmlspecialchars($_SESSION["email"]);?>">
            </div>
        </form>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
    </div>
    <?php require 'footer.php';?>