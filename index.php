
<?php
require ("./php/functions.php");
$language = get_param('lang','de');
$pageId = get_param('pageId',0);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="./css/style.css" />
    <title>CFS - Camping Freunde Seeland</title>
</head>
<body>
    <header>
        <div class="headerwrapper">
            <div class="logo"><img src="./images/cfs_logo.png" alt="Logo" /></div>
            <?php echo languageNavigation($language, $pageId)?>
        </div>
        <?php  echo navigation($language,$pageId) ?>
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