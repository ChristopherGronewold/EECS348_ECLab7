<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $size = intval($_POST["size"]);

    echo "<table border='1'>";

    // Print the header row
    echo "<tr>";
    echo "<th></th>";
    for ($i = 1; $i <= $size; $i++) {
        echo "<th>$i</th>";
    }
    echo "</tr>";

    // Print the multiplication table
    for ($i = 1; $i <= $size; $i++) {
        echo "<tr>";
        echo "<th>$i</th>";
        for ($j = 1; $j <= $size; $j++) {
            echo "<td>" . ($i * $j) . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}
?>
