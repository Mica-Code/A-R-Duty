<?php
session_start();

// Timeout after 30 minutes
$timeout = 1800;

if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $timeout) {
    session_unset();
    session_destroy();
    header("Location: /A-R-Duty/auth/signin?timeout=1");
    exit;
}

$_SESSION['last_activity'] = time();

if (!isset($_SESSION['user_id'])) {
    header("Location: /A-R-Duty/auth/signin");
    exit;
}

?>