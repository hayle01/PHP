<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEEK - 3</title>
</head>

<body>
    <?php
    $students  = array(
        array("Mohamed", 1990, "Hodan", "0617777777"),
        array("Ahmed", 2001, "Yaaqshid", "061888888"),
        array("Jaamc", 1986, "Shangaani", "06199999"),
    );

    $info = array("Mohamed", 1990, "Hodan", "0617777777");
    echo "<h3>Printing Array key/value pairs</h1>";
    foreach ($students as $k)
        echo ("$k[0], $k[1], $k[2], $k[3] <br>");


    //  Array functions 
    echo "<h5>Check is Array or not</h4>"; 
    // is_array
    if (is_array($students)) {
        echo "Is array <br>";
    } else {
        echo "It's not Array <br>";
    }

    // in_array
    if (in_array(1990, $info)) {
        echo "Yes its found <br>";
    } else {
        echo "Not found <br>";
    }


    echo "<h3>Array Function Practice</h3>";

    function showResult($functionName, $result)
    {
        echo "<h4>" . $functionName . "</h4><pre>";
        print_r($result);
        echo "</pre>";
    }

    showResult('count($info)', count($info));
    showResult('sizeof($info)', sizeof($info));

    $numbers = array(2, 4, 6, 8);
    sort($numbers);
    showResult('sort($numbers): ascending order', $numbers);

    $numbers = array(2, 4, 6, 8);
    rsort($numbers);
    showResult('rsort($numbers): descending order', $numbers);

    $scores = array('Mohamed' => 85, 'Ahmed' => 92, 'Hodan' => 78);
    asort($scores);
    showResult('asort($scores): values ascending', $scores);

    $scores = array('Mohamed' => 85, 'Ahmed' => 92, 'Hodan' => 78);
    arsort($scores);
    showResult('arsort($scores): values descending', $scores);

    $numbers = array(2, 4, 6, 8);
    showResult('max($numbers)', max($numbers));
    showResult('min($numbers)', min($numbers));

    showResult('implode: join $info with commas', implode(', ', $info));

    $sentence = 'The quick brown fox jumps over the lazy dog';
    showResult('explode: split sentence on spaces', explode(' ', $sentence));

    $cards = array('Ace', 'King', 'Queen', 'Jack');
    shuffle($cards);
    showResult('shuffle($cards): random order', $cards);

    $firstColors = array('Red', 'Green');
    $moreColors = array('Blue', 'Yellow');
    showResult('array_merge($firstColors, $moreColors)', array_merge($firstColors, $moreColors));

    showResult('array_reverse($info)', array_reverse($info));

    $items = array(2, 4, 6, 8);
    $newSize = array_push($items, 10);
    showResult('array_push($items, 10): new size', $newSize);
    showResult('$items after array_push()', $items);

    $items = array(1, 2, 3, 4);
    $removedItem = array_pop($items);
    showResult('array_pop($items): removed item', $removedItem);
    showResult('$items after array_pop()', $items);

    showResult('end($info): last element', end($info));

    ?>

</body>

</html>