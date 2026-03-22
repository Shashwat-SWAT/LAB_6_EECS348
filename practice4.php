<form method="GET">
    <input type="number" name="num">
    <button type="submit">Generate</button>
</form>

<?php
if (isset($_GET['num'])) {

    $n = intval($_GET['num']);

    echo "<table border='1' cellpadding='5'>";

    // top header row (column indexes)
    echo "<tr><th></th>";
    for ($col = 1; $col <= $n; $col++) {
        echo "<th>$col</th>";
    }
    echo "</tr>";

    // table rows with row index + products
    for ($row = 1; $row <= $n; $row++) {
        echo "<tr>";
        echo "<th>$row</th>";  // row index

        for ($col = 1; $col <= $n; $col++) {
            echo "<td>" . ($row * $col) . "</td>";
        }

        echo "</tr>";
    }

    echo "</table>";
}
?>