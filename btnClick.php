<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Btn Click Php File</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <style>
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
        <h1>Btn Click</h1>
        <form action="" method="post">
            <button name="button" value="click">Click Me</button>
        </form>

        <?php
            if (isset($_POST['button'])) {
                btnClicked ();
            }

            function btnClicked () {
                echo "This function clicked by button.";
            }
        ?>
        <script src="" async defer></script>
    </body>
</html>