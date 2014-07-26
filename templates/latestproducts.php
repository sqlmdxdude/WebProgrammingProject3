<?php 
    // need data access layer here DAL so we can fill out all of the dynamic
    // content for this view which gets returned to the index view which is
    // sent to the browser by the controller


    // model data will be contained in a mysql result variable named $model
    include_once "/models/latestproducts.php";
    include_once "/widgets/addtocartwidget.php";
    
    $latestproducts='<div class="latestproducts">
    <div class="producttitle">Innova Beast - Champion Plastic</div><div class="productinstock"># in stock N</div><div class="productcost">Price: $14.99</div></div><div class="clearfix"></div>
    <div class="productarea"><p class="productinfo"><img src="" class="productimage" width="100px" height="100px"/>This disc is the first choice when a player moves from beginner player to an intermediate player. The speed is enough to change their game while not over frustrating them.</p><p style="float:right;">'.$addtocartwidget.'</p></div>
    ';
    
?>