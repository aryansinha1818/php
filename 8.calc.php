<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>
    <form action="8.calc.php" method="get">
        Num1 : <input type="number" name="num1">
        <br>
        Num2 : <input type="number" name="num2">
        <br>
        <button>Add</button>
    </form>
    <br>
    Answer : <?php
                echo $_GET["num1"] + $_GET["num2"];
                ?>
</body>

</html>