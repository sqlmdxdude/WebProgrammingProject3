<?php
    include_once "cartview.php";
    include_once "loginview.php"; 
    include_once "banner.php";
    include_once "menunavigation.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <title><?php echo $title; ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="css/sitetemplate.css" type="text/css" rel="Stylesheet" media="Screen" />
    </head>
    <body>
        <div id="main">
            <div id="banner"><?php echo $cartview; echo $loginview; echo $banner; ?></div>
            <?php echo $menunavi; ?>
            <div id="usercontent">
                <div id="content"></div>
                <div id="quicklinks"></div>
            </div>
            <div id="footer"></div>
        </div>
    </body>
</html>