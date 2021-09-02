<?php
    include_once '../lib/helpers.php';
    

    include_once '../view/aereo/head.php';
    include_once '../view/aereo/header.php';

    echo "<body>"; //beatriz

        echo "<div class=container>"; //beatriz
            include_once '../view/aereo/navbar.php';

            if (isset($_GET['modulo'])) {
                resolve();
            }else{
                include_once '../view/aereo/content.php';
            }

        echo "</div>"; //beatriz

        include_once '../view/aereo/footer.php';

    echo "</body>"; //beatriz
echo "</html>"; //beatriz
?>