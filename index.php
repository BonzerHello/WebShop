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
        <h1>Promo Angebote</h1>
    </section>
    <section class="filter">
        <h1>Filtern</h1>
        </section>
    <section class="main-content">
        <?php require ("./php/mainContent.php"); ?>
    </section>
    <footer>
        <?php require ("./php/footer.php"); ?>
    </footer>
</body>
</html>