<?php
// Set timezone
date_default_timezone_set("Asia/Kolkata");

// Date of Birth (change this to your DOB)
$dob = new DateTime("2005-01-01");

// Current Date
$today = new DateTime();

// Calculate the difference
$age = $today->diff($dob);

// Display the result
echo "Date of Birth: " . $dob->format("Y-m-d") . "<br>";
echo "Today's Date: " . $today->format("Y-m-d") . "<br><br>";

echo "Age:\t";
echo $age->y . " years\t";
echo $age->m . " months\t";
echo $age->d . " days<br>";
echo "<br>";
echo "Code executed by Manshay(0221BCA106)";
?>
