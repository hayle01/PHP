<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $number = 12345;
    $reverse = 0;

    while ($number > 0) {
        $digit = $number % 10;
        $reverse = ($reverse * 10) + $digit;
        $number = (int)($number / 10);
    }

    echo "The reverse of 12345 is: $reverse";
    ?>
</body>

</html>