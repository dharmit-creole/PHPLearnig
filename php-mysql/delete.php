<?php
    include("config.php");

    $user = $conn->prepare("DELETE FROM USER WHERE Id = '5'");
    echo $user->execute();
?>