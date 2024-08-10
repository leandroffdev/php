<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // for
        $times = 3;
        for($i = 0; $i < $times;$i++) {
            echo "You are $i years old <br>";
        }

        // while
        $i = 0;
        while($i < $times) {
            echo "Step $i";
            echo '<hr>';
            $i++;
        }

        // do while
        $i = 0;
        do {
            echo "New step $i";
            $i++;
        }while($i < $times);
    ?>
</body>
</html>