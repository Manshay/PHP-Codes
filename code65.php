<?php
// Set timezone to IST (Indian Standard Time)
date_default_timezone_set("Asia/Kolkata");

// Latitude and Longitude for New Delhi
$latitude = 28.6139;
$longitude = 77.2090;

// Get current timestamp and formatted date
$timestamp = time();
$currentDate = date("Y-m-d");

// Calculate sunrise and sunset times
$sunrise = date_sunrise($timestamp, SUNFUNCS_RET_STRING, $latitude, $longitude, 90, 5.5);
$sunset = date_sunset($timestamp, SUNFUNCS_RET_STRING, $latitude, $longitude, 90, 5.5);

// Display the date with sunrise and sunset
echo "Date: $currentDate<br>";
echo "Sunrise in New Delhi: $sunrise AM<br>";
echo "Sunset in New Delhi: $sunset PM<br>";
echo "<br>";
echo "Code executed by Manshay(0221BCA106)";
?>
