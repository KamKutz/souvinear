<?php
require_once("../includes/initialize.php");
if (isset($_POST['submit'])) {

// remove all session variables
session_unset();

// destroy the session
session_destroy();

redirect_to('../login.php');
}
?>