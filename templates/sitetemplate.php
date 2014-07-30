<?php
    include_once "cartview.php";
    include_once "loginview.php"; 
    include_once "banner.php";
    include_once "menunavigation.php";
    include_once "footer.php";
    include_once "quicklinks.php";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <title><?php echo $title; ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="css/sitetemplate.css" type="text/css" rel="Stylesheet" media="Screen" />
        <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/1.4.5/numeral.min.js"></script>
        <?php echo $scriptinclude; ?>
    </head>
    <body>
        <div id="main">
            <div id="banner"><?php echo $cartview; echo $loginview; echo $banner; ?></div>
            <?php echo $menunavi; ?>
            <div id="usercontent">
                <div id="content"><?php echo $content; ?></div>
                <div id="quicklinks"><?php echo $quicklinks; ?></div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
            <?php echo $footer; ?>
        </div>
        <script type="text/javascript">
        var sc = document.getElementById("shoppingcart");
            sc.innerHTML=parseCart();</script>
    </body>
</html>