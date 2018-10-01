<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="./css/style.css" />
    <title>CFS - Camping Freunde Seeland</title>
</head>
<body>
    <header>
        <div class="logo"><img src="./images/cfs_logo.png" alt="Logo" /></div>
        <?php  require("./php/navigation.php"); ?>
    </header>
    <section class="promo">
        <?php require ("./php/promo.php");?>
    </section>
    <section class="filter">
        <?php require ("./php/filters.php"); ?>
    </section>


    <section class="main-content">
        <?php require ("./php/mainContent.php"); ?>
    </section>
    <footer>
        <?php require ("./php/footer.php"); ?>
    </footer>
</body>
</html>