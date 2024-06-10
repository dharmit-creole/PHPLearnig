<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <!-- nested function -->
        <?php
            $name = "Dharmit";
            function testingNew($dharmit, $fulmali) {
                global $name;
                echo "$name Inline";
                echo "<br>";
                echo "<h1>Nested Function Example</h1>";
                echo "name is ". $dharmit . ".";
                echo "<br>";
                echo "surname is ${fulmali}.";
                echo "<br>";

                function apple() {
                    echo "Its the nested Function Apple <br/>";
                }
            }
            echo $name;
            echo "<br>";
            testingNew("dharmit", "Fulmali");
            apple();
        ?>
        <!-- nested function -->

        <!-- callback function -->
        <?php
            function testing($dharmit, $fulmali) {
                echo "<h1>CallBack Function Example</h1>";
                echo "name is ". $dharmit . ".";
                echo "<br>";
                echo "surname is ${fulmali}.";
                echo "<br>";
            }

            function test($a, $b, $c) {
                $a($b, $c);
            }

            test("testing", "dharmit", "fulmali");

        ?>
        <!-- callback function -->

        <!-- sorting the number array -->
        <?php
            $numbers = [2, 5, 8, 1, 12, 3];
            sort($numbers);

            foreach ($numbers as $number) {
                echo "$number";
                echo "<br>";
            }
        ?>
        <!-- sorting the number array -->

        <!-- >Multidimensional Array -->
        <?php
            echo "<h1>Associative Array Function</h1>";
            $user = [
                "Volvo" => 20,
                "Tata" => 25,
                "Honda" => 28,
                "Suzuki" => 12,
            ];

            foreach ($user as $name => $age) {
                echo  "User Name is : " . $name . " and age is : " . $age;
                echo "<br>";
            }
        ?>

        <!-- >Multidimensional Array -->
        <?php
            echo "<h1>Multidimensional Array Function with nested Loop</h1>";
            $car = [
                ["Volvo", 20, 15],
                ["Tata", 25, 10],
                ["Honda", 28, 5],
                ["Suzuki", 12, 7],
            ];

            array_push($car, ["Hundayi", 100, 8], ["Range Rover", 20, 20]);

            echo "<table class='table-bordered my-5 mx-5 w-50'><tbody>";
            foreach ($car as $index => $cars) {
                echo "<tr>";
                echo "<td>" . $index + 1 . "</td>";
                foreach ($cars as $col) {
                    echo "<td>" . $col . "</td>";
                }
                echo "</tr>";
                // echo "<br>";
            }
            echo "</tbody></table>";
        ?>
        <!-- >Multidimensional Array -->

        <!-- Get and Post Request  -->
        
        <!-- Get and Post Request  -->
        <script src="" async defer></script>
    </body>
</html>