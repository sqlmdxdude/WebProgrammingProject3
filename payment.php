<?php 

//print_r($_POST);
//print_r($_COOKIE["shoppingcart"]);

    $title = "Payment - Welcome to Mega Lo Mart";
    $scriptinclude='<script src="scripts/addtocart.js" type="text/javascript"></script><script src="scripts/paymentmethods.js" type="text/javascript"></script>';

    include_once "models/purchasesmodel.php";
    savePurchase($_POST["cartsubtotal"]."|".$_POST["cartshipping"]."|".$_POST["carttax"]."|".$_POST["cartordertotal"], $_COOKIE["shoppingcart"]);
    include_once "views/payment.php";
    include_once "templates/sitetemplate.php";
    
//echo "<html><body>";
//echo "<p>Take payment</p>";
//echo "<p>process payment</p>";
//echo "<p>Insert purchase into database</p>";
//echo "<p>Insert purchase details into database</p>";
//echo "<p>Reduce inventory by number ordered</p>";
//echo "<p>Print confirmation</p>";
//echo "</body></html>";

?>