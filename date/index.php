<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Date</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo");
        echo "Hoje é " . date("d/M/y");
        echo " e a hora é " . date("h\h:i\m:s\s");
    ?>
</body>
</html>