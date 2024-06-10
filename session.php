<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Session with Request</title>
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
        <h2>Session With Request</h2>
        <form action="" method="post">
            <input type="text" name="user" placeholder="Enter your name" id="">
            <br>
            <br>
            <button name="button" value="set">Set Session</button>
            <br>
            <br>
            <button name="button" value="get">get Session</button>
            <br>
            <br>
            <button name="button" value="delete">Delete Session</button>
        </form>

        <?php
            session_start();
            if (isset($_POST['button'])) {
                if ($_POST['button'] == "set") {
                    $u_name = $_POST['user'];
                    $_SESSION['user'] = $u_name;
                }

                if ($_POST['button'] == "get") {
                    echo $_SESSION['user'];
                }

                if ($_POST['button'] == "delete") {
                    session_destroy();
                }
            }
        ?>
        <script src="" async defer></script>
    </body>
</html>