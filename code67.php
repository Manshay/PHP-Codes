<?php
// Set default timezone to India (IST)
date_default_timezone_set("Asia/Kolkata");

// Current time and date
echo "Current Date and Time: " . date("Y-m-d H:i:s") . "<br><br>";

// Only current time
echo "Current Time: " . date("h:i:s A") . "<br>";

// Only current date
echo "Current Date: " . date("d-m-Y") . "<br>";

// Day of the week
echo "Day: " . date("l") . "<br>";

// Unix timestamp
echo "Current Unix Timestamp: " . time() . "<br>";

// Convert a specific date to timestamp
$customDate = "2025-04-05 08:30:00";
echo "Timestamp for $customDate: " . strtotime($customDate) . "<br>";

// Format a future time (e.g., +1 week)
echo "Date after 1 week: " . date("Y-m-d", strtotime("+1 week")) . "<br>";

// Format a past time (e.g., -10 days)
echo "Date 10 days ago: " . date("Y-m-d", strtotime("-10 days")) . "<br>";

echo "<br>";
echo "Code executed by Manshay(0221BCA106)";
?>
