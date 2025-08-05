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
    }
    .container {
        box-shadow: 0 0 30px 1px rgba(0, 0, 0, 0.422);
        border-radius: 30px;
        padding: 30px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    h1 {
        color: rgb(0, 106, 255);
        font-size: 30px;
    }
    .box {
        /* background-color: red; */
        width: 80%;
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
        width: 70%;
        background-color: rgb(0, 106, 255);
        color: white;
        border: none;
        border-radius: 4px;
        padding: 10px;
    }
</style>
<body>
    <div class="container">
        <h1>Simple Interest Calculator</h1>
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
    </div>
</body>
</html>