<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Auth Login</title>
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
            <h2 style="margin: auto;">Basic Auth Login</h2>
            <input type="email" name="userEmail" placeholder="Enter your email" required>
            <input type="password" name="userPassword" placeholder="Enter your password" required>
            <input type="submit" name="login" value="Login">
        </form>

        <?php
        // Saved data in the database
        $email = "auth@testmail.com";
        $password = "12345678";

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
            $inputEmail = $_POST['userEmail'];
            $inputPassword = $_POST['userPassword'];

            // Start Conditional Statement
            if ($inputEmail == $email && $inputPassword == $password) {
                echo "<h2 style='color: green; text-align: center;'>Login Successful!</h2>";
            } else {
                echo "<h2 style='color: red; text-align: center;'>Invalid email or password!</h2>";
            }
        }
        ?>

</body>
</html>
