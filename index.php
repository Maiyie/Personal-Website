
<?php
include_once('database.php');
// Check if the username is set in the session if (isset($_SESSION['username'])) {
if (true) {
  
  $username = $_SESSION['username'];
    header("Location: home.php");
} else {
  // Redirect the user to the login page if not logged in
  header("Location: login.php");
  exit();
}
