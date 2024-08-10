<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        
        // if
        if($age < 18) {
            echo "You aren't adult <br>";
        } else if($age == 18) {
            echo "You have 18 years old <br>";
        } else {
            echo "You are adult <br>";
        }

        // Switch
        $day = 3;
        switch ($day) {
            case 1:
                echo "Monday <br>";
                break;
            case 2:
                echo "Tuesday <br>";
                break;
            default:
                echo "Unknown day <br>";
                break;
        }
    ?>
</body>
</html>