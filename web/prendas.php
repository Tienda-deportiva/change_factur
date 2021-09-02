<?php
    include_once '../lib/helpers.php';
    

    include_once '../view/prendas/head.php';
    include_once '../view/prendas/header.php';

    echo "<body>"; //beatriz

        echo "<div class=container>"; //beatriz
            include_once '../view/prendas/navbar.php';

            if (isset($_GET['modulo'])) {
                resolve();
            }else{
                include_once '../view/prendas/content.php';
            }

        echo "</div>"; //beatriz

        include_once '../view/prendas/footer.php';

    echo "</body>"; //beatriz
echo "</html>"; //beatriz
?>