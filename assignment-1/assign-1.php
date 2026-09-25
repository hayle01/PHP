<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $a = 12;
    $b = 5;
    $c = 9;

    $largest = $a;
    $smallest = $a;

    if ($b > $largest) {
        $largest = $b;
    }

    if ($c > $largest) {
        $largest = $c;
    }

    if ($b < $smallest) {
        $smallest = $b;
    }

    if ($c < $smallest) {
        $smallest = $c;
    }

    echo "The greatest number is: $largest<br>";
    echo "The smallest number is: $smallest";
    ?>
</body>

</html>