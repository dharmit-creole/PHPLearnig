<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>List of All demos</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>List Of All Demos</h1>
        <?php
            $path = "./";
            $listItems = scandir($path);
            $listItems = array_diff($listItems, array(".",".."));
            echo "<ul>";
            foreach ($listItems as $listItem) {
                echo "<li><a href='$path/$listItem' target='_blank'>$listItem</a></li>";
                echo "<br>";
            }
            echo "<ul>";
            echo "<br>";
        ?>
        <script src="" async defer></script>
    </body>
</html>