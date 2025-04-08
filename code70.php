<?php
// Set a cookie only if it's not already set
if (!isset($_COOKIE['user'])) {
    setcookie("user", "Manshay", time() + 3600, "/"); // 1-hour expiry
    echo "Cookie named 'user' is set. Please refresh the page to access it.";
} else {
    // Access the cookie
    echo "Welcome, " . $_COOKIE['user'];
}

echo "<br><br>";
echo "Code executed by Manshay(0221BCA106)";
?>
