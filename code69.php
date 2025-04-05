<?php
$a = 6;  // Binary: 0110
$b = 3;  // Binary: 0011

echo "a = $a<br>";
echo "b = $b<br><br>";

// Bitwise AND
echo "a & b = " . ($a & $b) . "  // 0110 & 0011 = 0010 (2)<br>";

// Bitwise OR
echo "a | b = " . ($a | $b) . "  // 0110 | 0011 = 0111 (7)<br>";

// Bitwise XOR
echo "a ^ b = " . ($a ^ $b) . "  // 0110 ^ 0011 = 0101 (5)<br>";

// Bitwise NOT
echo "~a = " . (~$a) . "  // ~0110 = " . decbin(~$a) . " (" . (~$a) . ")<br>";

// Left Shift
echo "a << 1 = " . ($a << 1) . "  // 0110 << 1 = 1100 (12)<br>";

// Right Shift
echo "a >> 1 = " . ($a >> 1) . "  // 0110 >> 1 = 0011 (3)<br>";

echo "<br>";
echo "Code executed by Manshay(0221BCA106)";
?>
