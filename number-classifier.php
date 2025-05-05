<!-- Number Classfier -->
<?php
// Check if the number is positive, negative, or zero
$number = 11;

if($number>0){
    echo "$number is a positive value.";
}elseif($number<0){
    echo "$number is a negative value";
}else{
    echo "$number is zero.";
}
echo "<br>";


// echo code in a secondery way to check if the number is positive, negative, or zero
$number = 11;

if($number>0){
    echo $number .'Is a positive value.';
}elseif($number< 0){
    echo $number .'Is a negative value';
}else{
    echo $number .'Is zero.';
}


echo "<br>";
// write code with switch case to check if the number is positive, negative, or zero
$number = 11;
switch($number){
    case ($number > 0):
        echo "$number is a positive value.";
        break;
    case ($number < 0):
        echo "$number is a negative value.";
        break;
    default:
        echo "$number is zero.";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Classfier</title>
    <style>
        .links{
            display: flex;
            flex-direction: row;
            gap: 10px;
        }
        .links a{
            text-decoration: none;
            color: #ffffff;
            background-color: #000000;
            padding: 10px 25px;
            border-radius: 5px;
        }
        input{
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #000000;
            margin-top: 10px;
            outline: none;
        }
        input[type="submit"]{
            background-color: #000000;
            color: #ffffff;
            border: none;
            cursor: pointer;
        }
</style>
</head>
<body>
    <h1>Page Links</h1>
    <!-- Write anthor to connect with other pages-->
    <div class="links">
        <a href="number-classifier.php">Number Classifier</a>
        <a href="temperature-converter.php">Temperature Converter</a>
        <a href="basic-auth-system.php">Basic Auth System</a>
        <a href="symple-electricty-bil.php">Symple Electricty Bill</a>
    </div>
    <h1>Number Classifier</h1>
    <form action="" method="post">
        <input type="number" name="number" placeholder="Enter a number" required>
        <input type="submit" value="Classify Number">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        if ($number > 0) {
            echo "$number is a positive value.";
        } elseif ($number < 0) {
            echo "$number is a negative value.";
        } else {
            echo "$number is zero.";
        }
    }   
    ?>
</body>