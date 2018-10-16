
<?php
require ("./php/functions.php");
require ("./php/data.php");

$language = get_param('lang','de');
$pageId = get_param('pageId','home');
$pageAction = get_param('pageAction','index');

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
            <?php echo languageNavigation($language, $pageId, $pageAction)?>
        </div>
        <?php  echo navigation($language,$pageId, $pageAction) ?>
    </header>
    <section class="promo">
        <?php require("./templates/diverse/promo.php");?>
    </section>
    <?php require ("./templates/".$pageId."/".$pageAction.".php")?>
    <footer>
        <?php require("./templates/diverse/footer.php"); ?>
    </footer>
</body>
</html>