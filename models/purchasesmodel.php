<?php
    include_once "datahelpers.php";

    // model will contain either a mysql error or the data
    function savePurchase($checkout, $cart){    
        $sql = "INSERT INTO purchases (profileid, purchasedate, subtotal, tax, shipping) VALUES ()";
        echo $sql;
        echo "<br/>";
        print_r($cart);
        echo "<br/>";
        print_r($checkout);
        //$model=runSelectSQL($sql);
    }
?>