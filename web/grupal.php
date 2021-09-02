<?php
    include_once '../lib/helpers.php';
    

    include_once '../view/grupal/head.php';
    include_once '../view/grupal/header.php';

    echo "<body>"; //beatriz

        echo "<div class=container>"; //beatriz
            include_once '../view/grupal/navbar.php';

            if (isset($_GET['modulo'])) {
                resolve();
            }else{
                include_once '../view/grupal/content.php';
            }

        echo "</div>"; //beatriz

        include_once '../view/grupal/footer.php';

    echo "</body>"; //beatriz
echo "</html>"; //beatriz
?>