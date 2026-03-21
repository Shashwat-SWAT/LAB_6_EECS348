<!DOCTYPE html>
<html>
<head>
    <title>Practice 4 - PHP Multiplication Table</title>
</head>
<body>

    <h1>PHP Multiplication Table</h1>

    <form method="GET" action="practice4.php">
        <label>Enter a number: <input type="number" name="num"></label>
        <button type="submit">Generate</button>
    </form>

    <br>

    <?php
    if (isset($_GET['num'])) {

        $n = intval($_GET['num']);

        // Reference: Slide 23 (intro-web-programming.pdf) - nested for loops
        for ($row = 1; $row <= $n; $row++) {
            for ($col = 1; $col <= $n; $col++) {
                echo $row . " x " . $col . " = " . ($row * $col) . "&nbsp;&nbsp;&nbsp;";
            }
            echo "<br>";
        }
    }
    ?>

</body>
</html>