<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
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
            <input type="file" name="upload_file" id="">
            <br>
            <br>
            <button>Uplaod File</button>
       </form>

       <?php
            $uploadDir = "./uploads/";
            if($_FILES) {
                foreach ($_FILES as $fileData) {
                    foreach ($fileData as $key => $value) {
                        // echo "$key is = $value";
                        // echo "<br>";
                        if ($key === 'name') {
                            $fileName = $value;
                        }

                        if ($key === 'tmp_name') {
                            $temName = $value;
                        }
                    }

                    $uploadPath = $uploadDir . $fileName;
                    move_uploaded_file($temName , $uploadPath);

                    }
            }
       ?>
        
        <script src="" async defer></script>
    </body>
</html>