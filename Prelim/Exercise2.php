<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 2</title>
</head>

<body>
    <!-- 
    Sample Case #1
    Num 1: 1
    Num 2: 2
    Num 3: 3
    Num 4: 4

    Lowest Number: 1 - Num 1
    Highest Number: 4 - Num 4

    Sample Case #2
    Num 1: 1
    Num 2: 2
    Num 3: 3
    Num 4: 4

    Lowest Number: 1 - Num 1
    Highest Number: 4 - Num 4
    -->

    <h1>Exercise 2</h1>
    <form action="" method="GET">
        Num 1 <input type="text" name="num1"><br /><br />
        Num 2 <input type="text" name="num2"><br /><br />
        Num 3 <input type="text" name="num3"><br /><br />
        Num 4 <input type="text" name="num4"><br /><br />
        <button type="submit">Display</button>
    </form><br /><br />

    <?php
    if (isset($_GET["num1"]) && isset($_GET["num2"]) && isset($_GET["num3"]) && isset($_GET["num4"])) {
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $num3 = $_GET["num3"];
        $num4 = $_GET["num4"];

        // Initialize lowest and highest with the first number
        $lowest = $num1;
        $highest = $num1;
        $lowestPosition = 1;
        $highestPosition = 1;

        // Compare with num2
        if ($num2 < $lowest) {
            $lowest = $num2;
            $lowestPosition = 2;
        }
        if ($num2 > $highest) {
            $highest = $num2;
            $highestPosition = 2;
        }

        // Compare with num3
        if ($num3 < $lowest) {
            $lowest = $num3;
            $lowestPosition = 3;
        }
        if ($num3 > $highest) {
            $highest = $num3;
            $highestPosition = 3;
        }

        // Compare with num4
        if ($num4 < $lowest) {
            $lowest = $num4;
            $lowestPosition = 4;
        }
        if ($num4 > $highest) {
            $highest = $num4;
            $highestPosition = 4;
        }

        // Output the results
        echo "Lowest Number: $lowest - Num $lowestPosition<br />";
        echo "Highest Number: $highest - Num $highestPosition<br />";
    }
    ?>
</body>

</html>