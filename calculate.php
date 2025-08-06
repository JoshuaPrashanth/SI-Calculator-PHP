<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SI Result</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="calculate.css">
</head>
<body>
    <div class="result-container">
        <?php
        if (isset($_GET['principal']) && isset($_GET['rate']) && isset($_GET['time'])) {
            $p = $_GET['principal'];
            $r = $_GET['rate'];
            $t = $_GET['time'];

            if ($p > 0 && $r > 0 && $t > 0) {
                $si = ($p * $r * $t) / 100;
                $total = $p + $si;
                echo "<p><strong>Principal:</strong> $p</p>";
                echo "<p><strong>Rate:</strong> $r%</p>";
                echo "<p><strong>Time:</strong> $t years</p>";
                echo "<p><strong>Simple Interest:</strong> $si</p>";
                echo "<p><strong>Total Amount:</strong> $total</p>";
            } else {
                echo "<p>Please enter valid positive values.</p>";
            }
        } else {
            echo "<p>Missing input values.</p>";
        }
        ?>
        <a href="index.html">Back</a>
    </div>
</body>
</html>
