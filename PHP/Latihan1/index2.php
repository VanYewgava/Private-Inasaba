<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    echo "<table border='i'><br/>";
    for ($row=1; $row <= 3; $row++) { 
        echo "<tr>";
        for ($col=1; $col <= 5; $col++) { 
            echo "<td>$col,$row </td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>