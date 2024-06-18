<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"><![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Display Table from Database</title>
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

            table td {
                min-width: 200px;
                text-align: center;
            }
            .btn-danger {
                background-color: #ed2e2e;
                font-weight: 600;
            }

            .btn-info {
                background-color: #ffd814;
                color: #000;
                font-weight: 600;
            }
        </style>
    </head>
    <body>
        <?php
            include("./config.php");
            // Initialize variables to default values
            $editID = '';
            $editName = '';
            $editAge = '';
            $editEmail = '';

            if (isset($_POST["update"])) {
                // print_r($_POST["update"]);
                $idUpdate = $_POST["update"];
                $updateUser = $conn->prepare("SELECT * FROM user WHERE id = '$idUpdate' ");
                $updateUser->execute();
                $updateUserData = $updateUser->fetchAll(PDO::FETCH_ASSOC);
                foreach ($updateUserData as $key => $editData) {
                    $editID = $editData['Id'];
                    $editName = $editData['Name'];
                    $editAge = $editData['Age'];
                    $editEmail = $editData['Email'];
                }                
            }
            
            // insert the data
            if (isset($_POST['Name'])) {
                $name = $_POST['Name'];
                $age = $_POST['Age'];
                $email = $_POST['Email'];

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
                exit;
            }

            if (isset($_POST['updateBtn'])) {
                $upID = $_POST['updateBtn'];
                $upName = $_POST['Name'];
                $upAge = $_POST['Age'];
                $upEmail = $_POST['Email'];
            }
            // insert the data

            // delete the data
            if (isset($_POST["delete"])) {
                $idDelete = $_POST["delete"];
                $delete = $conn->prepare("DELETE FROM user WHERE id = '$idDelete' ");
                $delete->execute();
            }
            // delete the data
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <input type="text" name="Name" id="" placeholder="Enter the Name" value="<?php echo $editName ?>">
            <br/>
            <br/>
            <input type="number" value="<?php echo $editAge ?>" name="Age" id="" placeholder="Enter the Age">
            <br/>
            <br/>
            <input type="email" value="<?php echo $editEmail ?>" name="Email" id="" placeholder="Enter Your Email ID">
            <br/>
            <br/>
            <button name="addUserBtn" type="submit">Add the User</button>
            <button value="<?php echo $editID ?>" name="updateBtn" type="submit">Update User Data</button>
        </form>

         <?php
            // dsplay the data
            $getStudetns = $conn->prepare("SELECT * FROM user");
            $getStudetns->execute();
            $user1 = $getStudetns->fetchAll(PDO::FETCH_ASSOC);
            // print_r($user1);
            echo "<table border=1>";
            foreach ($user1 as $key => $user) {
                echo "<tr>";
                foreach ($user  as $key => $value) {
                    echo "<td>" .$value . "</td>";
                }
                $userId = $user["Id"];
                echo "<td><form method='post'><button class='delete btn-danger' name='delete' value='" . htmlspecialchars($userId) . "'>Delete</button></form></td><td><form method='post'><button class='btn-info' value='" . htmlspecialchars($userId) . "' name='update'>Edit</button></form></td>";
                echo "</tr>";
            }
            echo "</table>";
            echo $_POST['Id'];
            // dsplay the data
        ?>
        <script src="" async defer>

        </script>
    </body>
</html>