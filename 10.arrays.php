<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>
    <?php
    $friends = array("John", "Raj", "Rishabh", 1, true);
    echo $friends[0];
    echo "<br>";
    echo $friends[1];
    echo "<br>";
    echo $friends[2];
    echo "<br>";
    echo $friends[3];
    echo "<br>";
    echo $friends[4];

    echo "<br>";
    echo "this is changing array elements &nbsp";
    $friends[1] = "Aryan";
    echo "$friends[1]";

    echo "<br>";
    $friends[5] = "five";
    echo "$friends[5]";

    echo "<br>";
    echo count($friends);

    ?>
</body>

</html>