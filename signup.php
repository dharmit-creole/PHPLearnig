<?php
    if ($_REQUEST) {
        foreach ($_REQUEST as $key => $value) {
            echo "User $key is : $value";
            echo "<br/>";
        }
    }
?>