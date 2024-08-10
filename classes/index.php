<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // classes
        class Person {
            private $name;
            private $age;
            // Constructor
            public function __construct($name, $age) {
                $this->name = $name;
                $this->age = $age;
            }
            // Getters
            public function getName() {
                return $this->name;
            }
            public function getAge() {
                return $this->age;
            }
            // Setters
            public function setName($name) {
                $this->name = $name;
            }
            public function setAge($age) {
                $this->age = $age;
            }

            // Methods
            public function printNameAndAge() {
                echo "Name: $this->name";
                echo '<br>';
                echo "Age: " . $this->age . " years old";
            }
        }

        $person = new Person("Isabelle", "29");
        $person->printNameAndAge();
        // var_dump($person)
    ?>
</body>
</html>