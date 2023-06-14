<?php

// Perform any additional logout actions if needed

// Unset or expire the session cookie
$session_duration = -3600; // Set a negative duration to expire the cookie
setcookie("session", "", time() + $session_duration);

// Redirect to the login page or any other appropriate page
header("Location: login.html");
exit();
