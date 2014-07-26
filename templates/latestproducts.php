<?php 
    // need data access layer here DAL so we can fill out all of the dynamic
    // content for this view which gets returned to the index view which is
    // sent to the browser by the controller


    // model data will be contained in a mysql result variable named $model
    include_once "/models/latestproducts.php";
    include_once "/widgets/addtocartwidget.php";

    
    $latestproducts="";
    while($row=mysqli_fetch_assoc($model)){
        $latestproducts = $latestproducts.'<div class="latestproducts">
        <div class="producttitle">'.$row["itemname"].'</div><div class="productinstock"># in stock '.$row["numberinstock"].'</div><div class="productcost">Price: '.$row["price"].'</div></div><div class="clearfix"></div>
        <div class="productarea"><p class="productinfo"><img src="'.$row["pathtoimage"].'" class="productimage" width="100px" height="100px"/>'.$row["description"].'</p><p style="float:right;">'.str_replace("%price%", $row["price"] , str_replace("%inventoryitem%", $row["inventoryid"], $addtocartwidget)).'</p></div>
        ';
    }
    
?>