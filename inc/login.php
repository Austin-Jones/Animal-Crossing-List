<?php
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    echo '<a href="account.php">Account</a><a href="/">Contact</a><a href="/" class="registerBtn">About</a>';
}else {
echo '<a href="/" class="loginBtn">Contact</a><a href="/" class="registerBtn">About</a>';
}
?>