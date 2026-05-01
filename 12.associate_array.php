<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associate Array</title>
</head>
<!-- student in class and there marks -->

<body>
    <form action="12.associate_array.php" method="post">
        <input type="submit">
    </form>

    <?php

    $grades = array("Jim" => 90, "Raj" => 80, "Rishabh" => 70);
    echo $grades["Raj"];
    ?>
</body>

</html>