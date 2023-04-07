<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Multiplication Table</h1>
    <form action="" method="post">
        Size of the multiplication table: <input type="text" name="size"><br>
        <input type="submit" name="submit" value="Generate">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $size = intval($_POST['size']);
        if ($size > 0) {
            echo "<table>";
            echo "<tr><th></th>";
            for ($i = 1; $i <= $size; $i++) {
                echo "<th>$i</th>";
            }
            echo "</tr>";
            for ($i = 1; $i <= $size; $i++) {
                echo "<tr><th>$i</th>";
                for ($j = 1; $j <= $size; $j++) {
                    echo "<td>" . $i * $j . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Please enter a positive integer.</p>";
        }
    }
    ?>
</body>
</html>
