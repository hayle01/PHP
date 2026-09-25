<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 7 - HCF</title>
</head>

<body>
    <?php
    $firstNumber = 18;
    $secondNumber = 24;
    $first = $firstNumber;
    $second = $secondNumber;

    while ($second != 0) {
        $remainder = $first % $second;
        $first = $second;
        $second = $remainder;
    }

    echo "The HCF of $firstNumber and $secondNumber is: $first";
    ?>
</body>

</html>