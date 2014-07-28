<?php

    include_once "templates/cartview.php";
    include_once "templates/loginview.php"; 
    include_once "templates/banner.php";
    include_once "templates/menunavigation.php";
    include_once "templates/footer.php";
    include_once "models/checkoutmodel.php";
    $scriptinclude='<script src="scripts/addtocart.js" type="text/javascript"></script>';
    $content="";
    $title="Mega Lo Mart - Check out";
    $quicklinks="";
    $_COOKIES["jabberjaw"]="Nuyuck";
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
                <div><form id="checkout" name="checkout" action="payment.php" method="post"><?php while($row=mysqli_fetch_assoc($model)){echo '<div><img src="'.$row["pathtoimage"].'" /><input type="text" name="q'.$rows["inventoryid"].'" value="" /></div>';}; ?><br/><input type="button" value="Check out" onclick="checkoutCart();" /></form><script type="text/javascript"> function checkoutCart(){document.cookie =  "shoppingcart=; expires=Thu, 01 Jan 1970 00:00:00 GMT";}</script>
                <div id="content"><?php echo $content; ?><div id="noitemsincart"><h2>Cart</h2><p>Your cart is empty. <br/>To add an item to your cart, start by searching or browsing through our departments. When you find something you like, click the "Add to Cart" button and the item will be placed here until you check out.</p></div></div>
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