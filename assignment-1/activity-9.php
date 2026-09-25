<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 9 - Prime Number</title>
</head>

<body>
    <?php
    $number = 29;
    $isPrime = true;

    if ($number <= 1) {
        $isPrime = false;
    }

    for ($divisor = 2; $divisor * $divisor <= $number; $divisor++) {
        if ($number % $divisor == 0) {
            $isPrime = false;
            break;
        }
    }

    if ($isPrime) {
        echo "$number is a prime number.";
    } else {
        echo "$number is a non-prime number.";
    }
    ?>
</body>

</html>