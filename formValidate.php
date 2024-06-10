<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Form Validation</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <style>
            .error,
            .required {
                color: red;
            }
            input {
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
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["name"])) {
                    $nameErr = "Pleae Fill the field";
                } else {
                    $name = ($_POST["name"]);
                    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                        $nameErr = "Only letters and white space allowed";
                    }
                }

                if (empty($_POST["email"])) {
                    $emailErr = "Pleae Fill the field";
                } else {
                    $email = ($_POST["email"]);
                    $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
                    // check if name only contains letters and whitespace
                    if (!preg_match($regex, $email)) {
                        $emailErr = "Pleae enter Valid Email Adress";
                    }
                }

                if (empty($_POST["gender"])) {
                    $genderErr = "Pleae Fill the field";
                } else {
                    $gender = ($_POST["gender"]);
                }
            }
        ?>

        <h1>Form Validation</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
            <div class="form-group">
                <label for="">Enter Name <span class="required">*</span></label>
                <input type="text" name="name" Plcaholder="Please Enter Your Name">
                <div class="error">
                    <?php echo $nameErr; ?>
                </div>
            </div>
            </br>
            </br>
            <div class="form-group">
                <label for="">Enter Email <span class="required">*</span></label>
                <input type="email" name="email" Plcaholder="Please Enter Your Email ID">
                <div class="error">
                    <?php echo $emailErr; ?>
                </div>
            </div>
            </br>
            </br>
            <div class="form-group">
                <label for="">Enter Gender <span class="required">*</span></label>
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="female">Female
                <input type="radio" name="gender" value="other">Other
                <div class="error">
                    <?php echo $genderErr; ?>
                </div>
            </div>
            </br>
            </br>
            <input type="submit" name="submit" value="Submit">  
        </form>
        <?php
            echo $name;
            echo "<br>";
            echo $email;
            echo "<br>";
            echo $gender;
        ?>
        <script src="" async defer></script>
    </body>
</html>