<!--
    November 20, 2024
    Ron Navalez
-->

<?php
// Start the session
session_start();

// Destroy the session
session_unset();
session_destroy();

// Redirect to login page or homepage
header("Location: login.php");
exit();
?>
