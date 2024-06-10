<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>File Upload</title>
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
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="uploaded_file" id="uploaded_file">
            <br>
            <br>
            <button>Submit</button>
        </form>

        <?php
            $uploadsDir = './uploads/';
            foreach ($_FILES as $value) {
                // print_r($value);
                foreach ($value as $key => $fileDetails) {
                    echo "$key is : $fileDetails";
                    echo "<br/>";

                    if ($key === 'name') {
                        $fileName = $fileDetails;
                    }
                    if ($key === 'tmp_name') {
                        $fileTmpName = $fileDetails;
                    }
                }

                $uploadsPath = $uploadsDir . $fileName;
                move_uploaded_file($fileTmpName, $uploadsPath);
            }
        ?>
        <script src="" async defer></script>
    </body>
</html>