<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions in strings</title>
</head>
<body>
    <?php
    $phrase = "Giraffe Academy";
    echo $phrase;
    echo "<br>";
    echo "<br>";
    echo strtolower($phrase);

    echo "<br>";
    echo "<br>";
    echo strtoupper("hello i am upper through strtoupper");

    echo "<br>";
    echo "<br>";
    echo strlen($phrase);

    echo "<br>";
    echo "<br>";
    echo "this is str through index &nbsp";
    echo $phrase[2];

    echo "<br>";
    echo "<br>";
    echo "access the char at any pos &nbsp";
    echo $phrase[0];

    echo "<br>";
    echo "<br>";

     echo "this is str replace &nbsp";
//this is basically creating a new one and if we want to replace then store in phrase
    echo str_replace("Giraffe", "Crocodile", $phrase);

    
    echo "<br>";
    echo "<br>";
     echo "this is after str replace &nbsp";
    echo $phrase;


    echo "<br>";
    echo "<br>";
    echo "this is substr &nbsp";
    echo substr($phrase, 2,3);
    ?>
</body>
</html>