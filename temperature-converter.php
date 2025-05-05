<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <style>
        .links {
            display: flex;
            flex-direction: row;
            gap: 10px;
        }
        .links a {
            text-decoration: none;
            color: #ffffff;
            background-color: #000000;
            padding: 10px 25px;
            border-radius: 5px;
        }
        input {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #000000;
            margin-top: 10px;
            outline: none;
            width: 100%;
        }
        input[type="submit"] {
            background-color: #000000;
            color: #ffffff;
            border: none;
            cursor: pointer;
            width: auto;
        }
        .row {
            display: grid;
            grid-template-columns: repeat(2, minmax(200px, 1fr));
            gap: 50px;
            justify-content: stretch;
            align-items: stretch;
        }
        form{
            flex-wrap: nowrap;
            display: flex;
            flex-direction: row;
            gap: 15px;
        }
    </style>
</head>
<body>

<h1>Page Links</h1>
<div class="links">
    <a href="number-classifier.php">Number Classifier</a>
    <a href="temperature-converter.php">Temperature Converter</a>
    <a href="basic-auth-system.php">Basic Auth System</a>
    <a href="symple-electricty-bil.php">Symple Electricty Bill</a>
</div>

<div class="col">
    <div>
        <h2>Celsius to Fahrenheit</h2>
        <form action="" method="post">
            <input type="number" name="celsiusnumber" placeholder="Enter temperature in Celsius" step="any" required>
            <input type="submit" name="c_to_f" value="Convert to Fahrenheit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['c_to_f'])) {
            $celsiusnumber = $_POST["celsiusnumber"];
            $celsiusResult = ($celsiusnumber * 9/5) + 32;
            echo "<p><strong>Result:</strong> $celsiusnumber °C = $celsiusResult °F</p>";
        }
        ?>
    </div>

    <div>
        <h2>Fahrenheit to Celsius</h2>
        <form action="" method="post">
            <input type="number" name="fahrenheitnumber" placeholder="Enter temperature in Fahrenheit" step="any" required>
            <input type="submit" name="f_to_c" value="Convert to Celsius">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['f_to_c'])) {
            $fahrenheitnumber = $_POST["fahrenheitnumber"];
            $fahrenheitResult = ($fahrenheitnumber - 32) * 5/9;
            echo "<p><strong>Result:</strong> $fahrenheitnumber °F = $fahrenheitResult °C</p>";
        }
        ?>
    </div>
</div>

</body>
</html>
