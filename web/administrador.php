<?php
    include_once '../lib/helpers.php';
    

    include_once '../view/administrador/head.php';
    include_once '../view/administrador/header.php';

    echo "<body>"; //beatriz

        echo "<div class=container>"; //beatriz
            include_once '../view/administrador/navbar.php';

            if (isset($_GET['modulo'])) {
                resolve();
            }else{
                include_once '../view/administrador/content.php';
            }

        echo "</div>"; //beatriz

        include_once '../view/administrador/footer.php';

    echo "</body>"; //beatriz
echo "</html>"; //beatriz
?>