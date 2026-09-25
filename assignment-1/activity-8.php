<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 8 - Multiplication Table</title>
    <style>
        table {
            border-collapse: collapse;
        }

        caption {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 0.25rem;
        }

        th,
        td {
            border: 1px solid #777;
            padding: 0.35rem 0.55rem;
            text-align: center;
        }

        th {
            background-color: #f0f0f0;
        }
    </style>
</head>

<body>
    <table>
        <caption>Multiplication Table</caption>
        <tr>
            <th>&times;</th>
            <?php
            for ($column = 1; $column <= 12; $column++) {
                echo "<th>$column</th>";
            }
            ?>
        </tr>
        <?php
        for ($row = 1; $row <= 12; $row++) {
            echo "<tr>";
            echo "<th>$row</th>";
            for ($column = 1; $column <= 12; $column++) {
                $result = $row * $column;
                echo "<td>$result</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>