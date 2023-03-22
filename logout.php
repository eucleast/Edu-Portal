<?php
require_once 'session.php';
logout();

// Redirect to login page
header("location: /test/index.php");
exit;
?>
