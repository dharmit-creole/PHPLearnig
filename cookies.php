<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cookies Static</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>Static Cookies</h1>
        <?php
            setcookie("fruit", "Apple", time()+(5));
            setcookie("color", "red", time()+(5));

            if (isset($_COOKIE)) {
                echo "current Cookie is " . $_COOKIE['fruit'];
            } else {
                echo "No Cookie is set";
            }
        ?>
        <script src="" async defer></script>
    </body>
</html>