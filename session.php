<?php
session_start();

// Check if the user is logged in
function check_login() {
    if(!isset($_SESSION['username'])) {
        header('Location: index.php');
        exit;
    }
}

// Set session variables
function set_session($key, $value) {
    $_SESSION[$key] = $value;
}

// Get session variable
function get_session($key) {
    return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
}

// Destroy the session and log the user out
function logout() {
    session_unset();
    session_destroy();
}
?>
