<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Basic Json Array Example</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <?php
            $dataArray = ["name" => "dharmit", "age" => "25", "email"=>"dharmit@creolestudios.com" ];
            $printJsonObject = json_encode($dataArray);
            echo $printJsonObject;
            echo "<br>";
            echo "<br>";
            foreach ($dataArray as $key => $value) {
                echo $key ." is ". $value ."";
                echo "<br>";
            }

            echo "<br>";
            echo "<br>";

            $dataObject = '{"name" : "dharmit", "age" : "25", "email" : "dharmit@creolestudios.com"}';
            $printJsonArray = json_decode($dataObject, true);
            print_r($printJsonArray);
            echo "<br>";
            echo "<br>";
            foreach ($printJsonArray as $key => $value) {
                echo $key ." is ". $value ."";
                echo "<br>";
            }
        ?>
        <script src="" async defer></script>
    </body>
</html>