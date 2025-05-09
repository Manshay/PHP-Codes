<?php
    $students = [
        "Manshay" => ["C" => 85, "Algo" => 90, "DS" => 78, "DBMS" => 88, "Stats" => 76],
        "Krish" => ["C" => 92, "Algo" => 80, "DS" => 89, "DBMS" => 84, "Stats" => 90],
        "Harsh" => ["C" => 75, "Algo" => 85, "DS" => 80, "DBMS" => 79, "Stats" => 82]
    ];
    
    $subjects = array_keys($students["Manshay"]);

    echo "<table border='1' cellspacing='0' cellpadding='10'>";
    echo "<tr>
        <th>SR No</th>
        <th>Subject</th>
        <th>Manshay</th>
        <th>Krish</th>
        <th>Harsh</th>
    </tr>";

    $totals = ["Manshay" => 0, "Krish" => 0, "Harsh" => 0];

    $srNo = 1;
    foreach ($subjects as $subject) {
        echo "<tr>
            <td>{$srNo}</td>
            <td>{$subject}</td>";

            foreach ($students as $name => $marks) {
                echo "<td>{$marks[$subject]}</td>";
                $totals[$name] += $marks[$subject]; // Calculate total marks
            }

        echo "</tr>";
        $srNo++;
    }

    $percentages = [];
    foreach ($totals as $name => $total) {
        $percentages[$name] = number_format($total / count($subjects), 2) . "%";
    }

    echo "<tr>
        <td colspan='2'><b>Total</b></td>";
            foreach ($totals as $total) {
                echo "<td><b>$total</b></td>";
            }
    echo "</tr>";

    echo "<tr>
        <td colspan='2'><b>Percentage</b></td>";
        foreach ($percentages as $percentage) {
            echo "<td><b>$percentage</b></td>";
        }
    echo "</tr>";

    echo "</table>";

    echo "<br>";
    echo "Code executed by Manshay(0221BCA106)";
?>
