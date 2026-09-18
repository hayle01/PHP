<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 1 - PHP Basics</title>
</head>

<body>

    <?php
    
    echo "Hello, World!";
    print "Welcome to PHP";
    echo '<h1>Hello, World HTML tag version</h1>';

    $name = "Mohamed Abdirahim";
    echo "Welcome, $name <br />";

    define("SITE_OWNER", "Omar");
    echo "Site Owner: " . SITE_OWNER . "<br />";

    $age = 23;
    echo "Age: ", $age, "<br /><br />";

    // CONTROL STRUCTURES
    // If/Else Statements
    echo "<b>If/Else Evaluation:</b><br />";
    if ($age > 25) {
        echo "You're eligible.<br />";
    } elseif ($age > 20) { 
        echo "Be mature.<br />";
    } else {
        echo "You're too young.<br />";
    }

    // Switch Statement
    echo "<br /><b>Switch Evaluation:</b><br />";
    switch (true) {
        case ($age > 25):
            echo "You're eligible.<br />";
            break;
        case ($age > 20):
            echo "Be mature.<br />";
            break;
        default:
            echo "You're too young.<br />";
    }
    ?>
</body>
</html>

<!--
    - Use 'echo' or 'print' for displaying output.
    - Every PHP statement must end with a semicolon (;).
    - Use 'echo' for faster printing or display.
    - Note: 'echo' can pass 2 or more arguments WITHOUT using parentheses, otherwise you get an error.
    - For complex expressions, use 'print' instead of 'echo' as it returns a value (1).
    
    VARIABLE RULES:
    - Syntax for declaring: $variableName = initialValue;
    - Cannot start with a number, cannot contain spaces, and cannot start with reserved words.
    - PHP variables are case-sensitive.
-->