<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Read File with Request</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <style>
            .error,
            .required {
                color: red;
            }
            input,
            textarea {
                width: 300px;
                max-width: 300px;
                padding: 10px 20px;
            }
            button,
            input[type="submit"] {
                border: 0;
                width: 300px;
                background: #333;
                color: #fff;
                padding: 10px 20px;
                cursor: pointer !important;
            }
            input[type="radio"] {
                width: 18px;
                height: 18px;
            }
        </style>
    </head>
    <body>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="enterFileName" id="">
            <br>
            <br>

            <button name="button" value="readFile">Read File</button>
            <br>
       </form>

       <?php
            if (isset($_FILES['enterFileName'])) {
                $rFile = $_FILES['enterFileName'] ['tmp_name'];
                $oFile = fOpen($rFile, "r"); 
                echo fread($oFile, fileSize($rFile));
                fclose($rFile);
            }
       ?>
       
        <script src="" async defer></script>
    </body>
</html>