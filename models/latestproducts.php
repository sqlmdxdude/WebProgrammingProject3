<?php
    include_once "datahelpers.php";
    
    $sql = "SELECT inventoryid, itemname, description, pathtoimage, price, numberinstock, backordered, arrivaldate from inventory order by arrivaldate desc limit 5;";
    $model=runSelectSQL($sql);
    // model will contain either a mysql error or the data
?>