<?php 

    include_once "models/checkoutmodel.php";
    processcartcookie();
    $cart=explode("|" ,$_COOKIE["shoppingcart"]);
    $content="";
    if(isset($model)){
    while($row=mysqli_fetch_assoc($model)){
        $content=$content.'<div><div class="cartproductarea">
                                <div class="cartimage"><img src="'.$row["pathtoimage"].'" /></div>
                                <div class="cartproducttitle">'.$row["itemname"].'</div>
                                <div class="cartorder"><span>Quantity Ordered</span><br/><input class="qo" maxLength="3" type="text" id="q'.$row["inventoryid"].'"  name="q'.$row["inventoryid"].'" value="'.getItemQuantity($cart, $row["inventoryid"]).'" /><br/><a href="#" onclick="updatecart(\'q'.$row["inventoryid"].'\')">Update Cart</a></div></div>
                            </div>';
    };
    $content = "<div>Cart</div>".$content;


}   
    function getItemQuantity($ic, $inventoryid){
        for($i=0;$i<count($ic); $i+=3){
            if($ic[$i]==$inventoryid){
                return $ic[$i+1]; // the current quantity
            }
        }
    }
    function processcartcookie(){


        $cart=explode("|", $_COOKIE["shoppingcart"]);
        if(cookiehasrepeatingkeys()){
        $summarycart;
        for($i=0;$i<count($cart);$i+=3){
            if(isset($summarycart[$cart[$i]])){
                $summarycart[$cart[$i]]=array($summarycart[$cart[$i]][0] + $cart[$i+1], $cart[$i+2]);
            } else {
                $summarycart[$cart[$i]]=array($cart[$i+1], $cart[$i+2]);
            }
        }
        
        $newcart="";
        foreach($summarycart as $key=>$cartitems){
            if($newcart!=""){
                $newcart=$newcart."|".$key."|".$cartitems[0]."|".$cartitems[0]*$cartitems[1];
            } else {
                $newcart=$newcart.$key."|".$cartitems[0]."|".$cartitems[0]*$cartitems[1];
            }
            
        }

            setrawcookie("shoppingcart",$newcart,time() + ( 365 * 24 * 60 * 60));
        }
    }
    function cookiehasrepeatingkeys(){
        $cart=explode("|", $_COOKIE["shoppingcart"]);
        $keys;
        for($i=0;$i<count($cart);$i+=3){
            if(isset($keys[$cart[$i]])){
                $keys[$cart[$i]]=$keys[$cart[$i]]+1;
            } else {
                $keys[$cart[$i]]=1;
            }
        }
        foreach($keys as $val){
            if(intval($val)>1) {
                return true;
            }
        }
        return false;
        
    }
?>
