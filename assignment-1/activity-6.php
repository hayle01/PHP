<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 6 - LCM</title>
</head>

<body>
    <?php
    $firstNumber = 8;
    $secondNumber = 12;
    $first = $firstNumber;
    $second = $secondNumber;

    while ($second != 0) {
        $remainder = $first % $second;
        $first = $second;
        $second = $remainder;
    }

    $lcm = ($firstNumber * $secondNumber) / $first;
    echo "The LCM of $firstNumber and $secondNumber is: $lcm";
    ?>
</body>

</html>