<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Self Request</title>
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
            <input type="text" name="email" placeholder="Enter your Email" id="">
            <br>
            <br>
            <input type="password" name="password" placeholder="Enter your password" id="">
            <br>
            <br>
            <button type="submit">Submit</button>
        </form>

        <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                foreach ($_POST as $key => $value) {
                    echo "User $key is : $value";
                    echo "<br/>";
                }
            }
        ?>
        <script src="" async defer></script>
    </body>
</html>