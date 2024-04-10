<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Php</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- ============php======= -->
    <?php
    $my_name = "{Hycon🐹}";
    $title = "Simple Calculator";
    // $my_age = 25;
    // echo $my_name;
    // echo "<br>";
    // echo "My lastname is " . $my_2name . " am " . $my_age . "years old";
    // echo "<br>";
    // echo "<a href=\"./index.php\">Click</a>";
    // echo "<br>";
    // // function multiply($num1, $num2){
    // //     echo $num1 * $num2;
    // // }
    // // multiply(5, 10);
    // echo "<br>";
    // echo strtoupper($my_name);
    // echo "<br>";
    // echo strtolower($my_2name);
    // echo "<br>";
    // echo ucwords($my_name);
    // echo "<br>";
    // echo ucwords("My name is bolaji olalekan olamide");

    // // =======Calculator=========
    // if (isset($_POST["number1"]) && isset($_POST["operator"]) && isset($_POST["number2"])) {
    // $num1 = $_POST["number1"];
    // $operator = $_POST["operator"];
    // $num2 = $_POST["number2"];

    //     echo '<br>';
    //     echo '<br>';
    //     echo $answer = $num1, $operator, $num2;
    // }
    ?>
    <!-- ============html======= -->
    <section>
        <h1>My name is <?php echo $my_name ?></h1>
        <h2><?php echo $title ?></h2>
        <form action="index.php" method="post">
            <p>Input 1: <input type="number" name="number1"></p>
            <p>Operators: <select name="operator">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select></p>
            <p>Input 2: <input type="number" name="number2"></p>
            <button name="submit" type="submit">Calc</button>
        </form>
        <?php
    // =======Calculator function=========
    if (isset($_POST["number1"]) && isset($_POST["operator"]) && isset($_POST["number2"])) {
        $num1 = $_POST["number1"];
        $operator = $_POST["operator"];
        $num2 = $_POST["number2"];
        
        echo '<br>';
        if ($operator == "+") {
            $answer = $num1 + $num2;
            echo $answer;
        } elseif ($operator == "-") {
            $answer = $num1 - $num2;
            echo $answer;
        } elseif ($operator == "*") {
            $answer = $num1 * $num2;
            echo $answer;
        } elseif ($operator == "/") {
            $answer = $num1 / $num2;
            echo $answer;
        } elseif ($operator == "") {
            echo $answer = "Enter a Mathematical Operator";
        } else {
            echo $answer = "Mathematical Operation not available";
        }
    }
    ?>
</section>
</body>
</html>