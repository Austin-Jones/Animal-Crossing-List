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
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Happy Hunting!</h1>
    </div>
    <div id="checklist">
  <input id="01" type="checkbox" name="r" value="1" checked>
  <label for="01">Bread</label>
  <input id="02" type="checkbox" name="r" value="2">
  <label for="02">Cheese</label>
  <input id="03" type="checkbox" name="r" value="3">
  <label for="03">Coffee</label>
</div>
<?php require 'footer.php';?>