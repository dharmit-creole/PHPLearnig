<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dropdown list</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <?php
            include("./config.php");
            $getData = $conn->prepare("SELECT * from user");
            $getData->execute();
            $studentData = $getData->fetchAll(PDO::FETCH_ASSOC);
            
            echo "<select>";
            echo "<option>Select A Name</option>";
            foreach ($studentData as $userData) {
                echo "<option value=".$userData['Id'].">" .$userData['Name'] . "</option>";
            }
            echo "</select>";
        ?>
        <script src="" async defer></script>
    </body>
</html>