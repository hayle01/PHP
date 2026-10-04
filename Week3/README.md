# Week 3: Array Functions and User-Defined Functions

These notes summarize the array and function examples in [`index.php`](index.php). The course guide groups arrays, functions, and include files across two weeks; Week 3's current code focuses on multidimensional arrays, common array functions, and defining/calling a function.

## 1. Iterating through records

The lesson stores each student's details in an indexed inner array, then loops through the outer array:

```php
$students = [
    ["Mohamed", 1990, "Hodan", "0617777777"],
    ["Ahmed", 2001, "Yaaqshid", "061888888"]
];

foreach ($students as $student) {
    echo $student[0] . ", " . $student[1] . "<br>";
}
```

Named keys are usually clearer for real records, but be able to read the numeric indexes used in the lesson.

## 2. Checking and counting arrays

- `is_array($value)` returns whether a value is an array.
- `in_array($needle, $array)` searches for a value. Pass `true` as the third argument when a strict type match is needed.
- `count($array)` returns the number of elements. `sizeof()` is an alias for `count()`.

```php
if (is_array($students)) {
    echo "This is an array";
}

$numberOfStudents = count($students);
$found = in_array(1990, $students[0], true);
```

## 3. Sorting arrays

```php
$numbers = [2, 8, 4, 6];
sort($numbers);  // Values ascending; numeric keys are re-indexed
rsort($numbers); // Values descending; numeric keys are re-indexed
```

For associative arrays, these sort by value while preserving key associations:

```php
$scores = ["Mohamed" => 85, "Ahmed" => 92, "Hodan" => 78];
asort($scores);  // Values ascending
arsort($scores); // Values descending
```

Remember the distinction: `sort()` / `rsort()` for ordinary indexed arrays; `asort()` / `arsort()` when key-to-value associations must remain intact.

## 4. Common array operations

| Function | What it does | Return value to remember |
|---|---|---|
| `max($array)` / `min($array)` | Finds the largest / smallest value | The value |
| `implode($separator, $array)` | Joins array values into a string | A string |
| `explode($separator, $string)` | Splits a string into an array | An array |
| `array_merge($a, $b)` | Combines arrays | A new array |
| `array_reverse($array)` | Reverses element order | A new array |
| `array_push($array, $value)` | Adds one or more values to the end | The new element count |
| `array_pop($array)` | Removes the last value | The removed value |
| `end($array)` | Moves the internal pointer to the last value | The last value, or `false` for an empty array |
| `shuffle($array)` | Randomizes element order in place | `true` on success |

Example:

```php
$words = ["quick", "brown", "fox"];
$sentence = implode(" ", $words);
$parts = explode(" ", $sentence);
```

## 5. Defining and calling a function

A function packages reusable statements. Declare it with `function`, a name, parentheses, and a body. Calling the function runs its body.

```php
function showResult($functionName, $result)
{
    echo "<h4>" . $functionName . "</h4><pre>";
    print_r($result);
    echo "</pre>";
}

showResult("count", count($students));
```

The values inside the parentheses in the declaration are parameters; the values supplied when calling it are arguments. The lesson's `showResult()` function prints its result and does not return a value.
