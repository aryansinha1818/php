<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>url params</title>
</head>

<body>
    <form action="9.url_param.php" method="get">
        Name: <input type="text" name="username">
        <br>
        <br>
        <input type="submit">
    </form>
    <br><br>

    <?php
    echo $_GET["username"];
    ?>
</body>

</html>