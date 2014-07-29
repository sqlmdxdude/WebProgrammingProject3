<?php 
    include_once "datahelpers.php";
    $model;
    if(isset($_COOKIE["shoppingcart"])){
        $checkoutcart= explode("|",$_COOKIE["shoppingcart"]);
        $inventoryitemsincart="";
        for($i=0;$i<count($checkoutcart);$i+=3)
        {
            $inventoryitemsincart=$inventoryitemsincart.($i==0?$checkoutcart[$i]:",".$checkoutcart[$i]);
        }
        $sql = "SELECT inventoryid, itemname, pathtoimage, price from inventory where inventoryid in ($inventoryitemsincart)";
        $model=runSelectSQL($sql);
    }   
?>