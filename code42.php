<?php
$students = [
    "Manshay" => ["C" => 85, "Algo" => 90, "DS" => 78, "DBMS" => 88, "Stats" => 76],
    "Krish" => ["C" => 92, "Algo" => 80, "DS" => 89, "DBMS" => 84, "Stats" => 90],
    "Harsh" => ["C" => 75, "Algo" => 85, "DS" => 80, "DBMS" => 79, "Stats" => 82]
];

// Printing the marks
foreach ($students as $name => $subjects) {
    echo "Marks for $name:<br>";
    foreach ($subjects as $subject => $mark) {
        echo "$subject: $mark<br>";
    }
    echo "<br>";
}

echo "Code executed by Manshay(0221BCA106)"
?>
