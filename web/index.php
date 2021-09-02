<?php
    include_once '../lib/helpers.php';
    

    include_once '../view/partials/head.php';
    include_once '../view/partials/header.php';

    echo "<body>"; //beatriz

        echo "<div class=container>"; //beatriz
            include_once '../view/partials/navbar.php';

            if (isset($_GET['modulo'])) {
                resolve();
            }else{
                include_once '../view/partials/content.php';
            }

        echo "</div>"; //beatriz

        include_once '../view/Partials/footer.php';

    echo "</body>"; //beatriz
echo "</html>"; //beatriz
?>