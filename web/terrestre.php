<?php
    include_once '../lib/helpers.php';
    

    include_once '../view/terrestre/head.php';
    include_once '../view/terrestre/header.php';

    echo "<body>"; //beatriz

        echo "<div class=container>"; //beatriz
            include_once '../view/terrestre/navbar.php';

            if (isset($_GET['modulo'])) {
                resolve();
            }else{
                include_once '../view/terrestre/content.php';
            }

        echo "</div>"; //beatriz

        include_once '../view/terrestre/footer.php';

    echo "</body>"; //beatriz
echo "</html>"; //beatriz
?>