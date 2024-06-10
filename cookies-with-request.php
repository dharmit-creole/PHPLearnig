<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cookies With Request</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <style>
            input {
                width: 300px;
                max-width: 300px;
                padding: 10px 20px;
            }
            button {
                border: 0;
                width: 300px;
                background: #333;
                color: #fff;
                padding: 10px 20px;
                cursor: pointer !important;
            }
        </style>
    </head>
    <body>
        <form action="" method="post">
            <input type="text" name="name" placeholder="Enter your name" id="">
            <br>
            <br>
            <button name="button" value="set">Set Cookie</button>
            <br>
            <br>
            <button name="button" value="display">Display Cookie</button>
            <br>
            <br>
            <button name="button" value="delete">Delete Cookie</button>
        </form>
        
        <?php
        if (isset($_POST['button'])) {
            if ($_POST['button'] == "set") {
                $name = $_POST['name'];
                setcookie("name", $name );
                echo "Your Cookie is set";
            }

            if ($_POST['button'] == "display") {
                // print_r($_COOKIE);
                if (isset($_COOKIE['name'])) {
                    echo $_COOKIE['name'];
                }
            }

            if ($_POST['button'] == "delete") {
                // print_r($_COOKIE);
                if (isset($_COOKIE['name'])) {
                   setcookie("name", null, -1 );
                }
            }
        }
        ?>
        <script src="" async defer></script>
    </body>
</html>