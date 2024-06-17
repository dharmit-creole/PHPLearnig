<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PHP connect With PDO class</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <?php
            $host="localhost";
            $username="root";
            $password= null;
            $dbname = "college";

            try {
                $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "conntection Done";
            } catch (PDOException $e) {
                echo "Connection Failed". $e->getMessage();
            }

            echo "<br>";
            $result = $conn->query("SHOW TABLES");
            foreach ($result->fetchAll(PDO::FETCH_NUM) as $row) {
                print_r($row);
            }
            // print_r( $result );

        ?>
        <script src="" async defer></script>
    </body>
</html>