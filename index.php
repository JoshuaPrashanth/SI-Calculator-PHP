<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SI Calculator</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
        font-weight: 500;
        font-style: normal;
    }
    body {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }
    .container {
        box-shadow: 0 0 30px 1px rgba(0, 0, 0, 0.422);
        border-radius: 30px;
        padding: 30px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        max-width: 400px;
        width: 90%;
    }
    h1 {
        color: rgb(0, 106, 255);
        font-size: 25px;
        text-align: center;
    }
    .box {
        /* background-color: red; */
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
    }
    input {
        width: 100%;
        border-radius: 4px;
        padding: 7px;
        outline: none;
        border: 1px solid rgb(118, 118, 118);
    }
    button {
        width: 90%;
        background-color: rgb(0, 106, 255);
        color: white;
        border: none;
        border-radius: 4px;
        padding: 10px;
    }
    p {
        width: 90%;
        text-align: center;
        word-wrap: break-word;
        margin-top: 14px;
    }
    form {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    #reset {
        background-color: rgba(139, 139, 139, 1);
    }
</style>
<body>
    <div class="container">
        <h1>Simple Interest Calculator</h1>
        <form action="index.php" method="get">
            <div class="box">
                <h4>Principal Amount ($):</h4>
                <input type="number" name="principal" placeholder="0">
            </div>
            <div class="box">
                <h4>Annual Interest Rate (%):</h4>
                <input type="number" name="rate" placeholder="0">
            </div>
            <div class="box">
                <h4>Number of Years:</h4>
                <input type="number" name="time" placeholder="0">
            </div>
            <button type="submit">Calculate</button>
            <br>
            <button type="button" id='reset' onclick="window.location.href='index.php'">Reset</button>
        </form>
        <?php
            if (isset($_GET['principal']) && isset($_GET['rate']) && isset($_GET['time'])) {

                $p = $_GET['principal'];
                $r = $_GET['rate'];
                $t = $_GET['time'];
                
                if ($p > 0 && $r > 0 && $t > 0) {
                    $si = ($p * $r * $t) / 100;
                    $total = $p + $si;
                    echo "<p>Simple Interest : $si</p>";
                }
                else {
                echo "<p>Please enter valid positive values.</p>";
                }
            }  
        ?>
    </div>
</body>
</html>