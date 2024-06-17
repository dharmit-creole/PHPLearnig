<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"><![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Display Table from Database</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
         <?php
            include("./config.php");
            $getStudetns = $conn->prepare("SELECT * FROM user");
            $getStudetns->execute();
            $user1 = $getStudetns->fetchAll(PDO::FETCH_ASSOC);
            echo "<table border=1>";
            foreach ($user1 as $user) {
                echo "<tr>";
                foreach ($user  as $key => $value) {
                    echo "<td>" .$value . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        ?>
        <script src="" async defer></script>
    </body>
</html>