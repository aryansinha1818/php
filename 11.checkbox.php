<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox</title>
</head>

<body>
    <form action="11.checkbox.php" method="post">
        Apples : <input type="checkbox" name="fruits[]" value="apples">
        <br>
        Oranges : <input type="checkbox" name="fruits[]" value="oranges">
        <br>
        Bananas : <input type="checkbox" name="fruits[]" value="bananas">
        <br>
        <input type="submit">
    </form>

    <?php
    $fruits = $_POST["fruits"];
    echo $fruits[0];
    echo "<br>";
    echo $fruits[1];
    echo "<br>";
    echo $fruits[2];
    ?>
</body>

</html>