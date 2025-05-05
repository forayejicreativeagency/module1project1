<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Electricty Bill Calculator</title>
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
form{
    display: flex;
    flex-direction: column;
    gap: 10px;
    max-width: 600px;
    margin: auto;
    margin-top: 50px;
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
        <form action="" method="post">
            <h2 style="margin: auto;">Simple Electricty Bill Calculator</h2>
            <input type="number" name="totalUnit" placeholder="Enter total unit"   required>
            <input type="submit" name="unitSubmit" value="Calculate Bill">
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Get the total units consumed from the form
                $totalUnit = $_POST['totalUnit'];

                // Define the upper limit for each units group
                $basicLimit = 50;     // Up to 50 units
                $mediumLimit = 100;   // 51 to 100 units
                $highLimit = 200;     // 101 to 200 units

                // Define per-unit rates for each units group
                $basicRate = 3.5;     // Rate for first 50 units
                $mediumRate = 4.5;    // Rate for 51 to 100 units
                $highRate = 5.5;      // Rate for 101 to 200 units
                $extremeRate = 6.5;   // Rate for units beyond 200

                // Initialize result variable to store the final bill
                $result = 0;

                // Calculate the bill based on total units
                if ($totalUnit <= $basicLimit) {
                    // Case 1: Total units are within the basic limit
                    $result = $totalUnit * $basicRate;

                } elseif ($totalUnit <= $mediumLimit) {
                    // Case 2: Total units are in range of medium limit

                    // Step 1: First 50 units at basic rate
                    // Step 2: Remaining units at medium rate
                    $result = ($basicLimit * $basicRate) +
                            (($totalUnit - $basicLimit) * $mediumRate);

                } elseif ($totalUnit <= $highLimit) {
                    // Case 3: Total units are in range of high limit
                    
                    // Step 1: First 50 units at basic rate
                    // Step 2: Next 50 units at medium rate
                    // Step 3: Remaining units at high rate
                    $result = ($basicLimit * $basicRate) +
                            (($mediumLimit - $basicLimit) * $mediumRate) +
                            (($totalUnit - $mediumLimit) * $highRate);

                } else {
                    // Case 4: Total units are above 200
                    // Step 1: First 50 units at basic rate
                    // Step 2: Next 50 units at medium rate
                    // Step 3: Next 100 units at high rate
                    // Step 4: Remaining units at extreme rate
                    $result = ($basicLimit * $basicRate) +
                            (($mediumLimit - $basicLimit) * $mediumRate) +
                            (($highLimit - $mediumLimit) * $highRate) +
                            (($totalUnit - $highLimit) * $extremeRate);
                }

                // Display the final result
                echo "<h2 style='text-align: center;'>Your total bill is: ৳" . $result . "</h2>";
            }
        ?>



</body>
</html>