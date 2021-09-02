<?php
    include_once '../lib/helpers.php';
    

    include_once '../view/acuatico/head.php';
    include_once '../view/acuatico/header.php';

    echo "<body>"; //beatriz

        echo "<div class=container>"; //beatriz
            include_once '../view/acuatico/navbar.php';

            if (isset($_GET['modulo'])) {
                resolve();
            }else{
                include_once '../view/acuatico/content.php';
            }

        echo "</div>"; //beatriz

        include_once '../view/acuatico/footer.php';

    echo "</body>"; //beatriz
echo "</html>"; //beatriz
?>