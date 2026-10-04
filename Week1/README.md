# Week 1: PHP Basics and Control Flow

These notes summarize the PHP examples in [`index.php`](index.php) and are written for class review and exam preparation.

## 1. PHP in an HTML page

PHP code is placed between `<?php` and `?>` tags. The web server executes the PHP and sends the resulting output to the browser; the browser receives HTML, not the PHP source.

```php
<!DOCTYPE html>
<html>
<body>
    <?php
    echo "Hello, World!";
    ?>
</body>
</html>
```

End each PHP statement with a semicolon (`;`).

## 2. Displaying output

- `echo` outputs one or more strings and does not return a value.
- `print` outputs one string and returns `1`.
- Parentheses are optional for both in ordinary use.
- Concatenate strings and values with the dot operator (`.`).

```php
echo "Hello";
print "Welcome";
echo "Age: " . $age;
echo "Name: ", $name, "<br>";
```

Use `echo` for general output. Remember that outputting HTML from PHP does not replace escaping untrusted user input in a real application.

## 3. Variables and constants

Variables begin with `$`; names are case-sensitive and cannot begin with a number or contain spaces.

```php
$name = "Mohamed";
$age = 23;
echo "Welcome, $name";
```

Use `define()` to create a named constant. A constant is referenced without `$`.

```php
define("SITE_OWNER", "Omar");
echo SITE_OWNER;
```

## 4. Conditional statements

`if` evaluates a condition. `elseif` checks another condition when the preceding conditions are false; `else` handles the remaining case.

```php
if ($age > 25) {
    echo "Eligible";
} elseif ($age > 20) {
    echo "More responsibility";
} else {
    echo "Too young";
}
```

The order of conditions matters: the first true branch runs, and the later branches are skipped. Use braces to make each branch clear.

## 5. `switch`

`switch` selects a matching `case`. Use `break` to prevent execution from continuing into the next case, and `default` for no match.

```php
switch ($day) {
    case "Monday":
        echo "Start of week";
        break;
    case "Friday":
        echo "End of week";
        break;
    default:
        echo "Another day";
}
```

The lesson file also demonstrates `switch (true)` with conditions in each `case`. For straightforward ranges, `if` / `elseif` is usually easier to read.
