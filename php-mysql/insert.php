<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Insert Data</title>
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
            <input type="text" name="Name" id="" placeholder="Enter the Name">
            <br/>
            <br/>
            <input type="number" name="Age" id="" placeholder="Enter the Age">
            <br/>
            <br/>
            <input type="email" name="Email" id="" placeholder="Enter Your Email ID">
            <br/>
            <br/>
            <button type="submit">Add the User</button>
        </form>
        <?php
            if (isset($_POST['Name'])) {
                $name = $_POST['Name'];
                $age = $_POST['Age'];
                $email = $_POST['Email'];

                include("./config.php");
                $user = $conn->prepare("
                    INSERT INTO `user` (`Id`, `Name`, `Age`, `Email`) 
                    VALUES(NULL,'$name', '$age', '$email')
                ");

                $result = $user->execute();
                if ($result) {
                    echo "Record Added";
                } else {
                    echo "Operation Failed";
                }
            }
        ?>

        <script src="" async defer></script>
    </body>
</html>