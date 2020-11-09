<html>
<head>
    <?php include_once("header.php")?>
<?php include("classes/database.php");
use classes\database;
?>


</head>
<body class="is-preload">

<!-- Sidebar -->
<section id="sidebar">
    <?php include_once("nav.php");?>
</section>

<!-- Wrapper -->
<div id="wrapper">
    <!-- Intro -->
    <section id="yourtodo" class="wrapper style1-alt fullscreen fade-up">
        <div class="inner">
            <h2>Here goes your todo</h2>
        </div>
    </section>

    <section id="history" class="wrapper style1 fullscreen fade-up">
    </section>

    <section id="logout" class="wrapper style1 fullscreen fade-up">
        <?php
        session_start();
        unset($_SESSION["nome"]);  // where $_SESSION["nome"] is your own variable. if you do not have one use only this as follow **session_unset();**
        header("Location: index.php");
        ?>
    </section>
</div>
<footer id="footer" class="wrapper style1-alt">
    <?php include_once("footer.php");?>
</footer>
</body>
</html>