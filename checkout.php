<?php

    print_r($_COOKIE);
    $content="";
    $quicklinks="";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <title><?php echo $title; ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="css/sitetemplate.css" type="text/css" rel="Stylesheet" media="Screen" />
        <?php echo $scriptinclude; ?>
    </head>
    <body>
        <div id="main">
            <div id="banner"><?php echo $cartview; echo $loginview; echo $banner; ?></div>
            <?php echo $menunavi; ?>
            <div id="usercontent">
                <div>YOu have been checked out.<script type="text/javascript">document.cookie =  "shoppingcart=; expires=Thu, 01 Jan 1970 00:00:00 GMT";</script>
                <div id="content"><?php echo $content; ?></div>
                <div id="quicklinks"><?php echo $quicklinks; ?></div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
            <?php echo $footer; ?>
        </div>
    </body>
</html>