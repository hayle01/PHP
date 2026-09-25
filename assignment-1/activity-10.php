<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 10 - Prime Numbers</title>
</head>

<body>
    <?php
    echo "Prime numbers from 10 to 50: ";

    for ($number = 10; $number <= 50; $number++) {
        $isPrime = true;

        for ($divisor = 2; $divisor * $divisor <= $number; $divisor++) {
            if ($number % $divisor == 0) {
                $isPrime = false;
                break;
            }
        }

        if ($isPrime) {
            echo "$number ";
        }
    }
    ?>
</body>

</html>