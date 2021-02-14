<!DOCTYPE html>
<html lang="ja">
<?php include "includes/header.php"; ?>

<body>
    <div class="wrapper">
        <?php include "includes/nav.php"; ?>
        <main class="main-content">
            <div class="text-6xl font-semibold text-white bg-blue-100 h-96 py-72">This isa text of tailwind</div>
        </main>
        <footer class="main-footer">
            <p class="footer__copyright">&copy; All rights reserve | グリーンズ英会話</p>
        </footer>
    </div>
    <!-- jQuery and plugins -->
    <script src="js/plugins/jquery/jquery-3.4.1.min.js"></script>
    <!-- jQuery form validation with JA translations -->
    <script src="js/plugins/validationEngine/jquery.validationEngine-ja.js"></script>
    <script src="js/plugins/validationEngine/jquery.validationEngine.min.js"></script>
    <!-- Minified script -->
    <script src="js/script.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-806156-14"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-806156-14');
    </script>
</body>

</html>