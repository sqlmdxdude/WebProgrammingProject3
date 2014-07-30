<?php 

    include_once "models/checkoutmodel.php";
    processcartcookie();
    $cart=explode("|" ,$_COOKIE["shoppingcart"]);
    $content="";
    if(isset($model)){
    while($row=mysqli_fetch_assoc($model)){
        $content=$content.'<div>
                                <div class="cartproductarea">
                                    <div class="cartimage"><img src="'.$row["pathtoimage"].'" /></div>
                                    <div class="cartproducttitle">'.$row["itemname"].' - Price $' . $row["price"].'</div>
                                    <div class="cartorder"><span>Quantity Ordered</span><br/><input class="qo" maxLength="3" type="text" id="q'.$row["inventoryid"].'"  name="q'.$row["inventoryid"].'" value="'.getItemQuantity($cart, $row["inventoryid"]).'" /><input type="hidden" id="price'.$row["inventoryid"].'"  name="price'.$row["inventoryid"].'" value="'.getItemPrice($cart, $row["inventoryid"]).'" /><br/><a href="#" onclick="updatecart(\'q'.$row["inventoryid"].'\')">Update Cart</a>
                                    <p><span>Line Total</span><br/><input class="linetotal" type="text" name="lt'.$row["inventoryid"].'" id="lt'.$row["inventoryid"].'" value="0.00" readonly/></p></div>
                                </div>
                            </div>';
    };
    $content=$content.'<div class="clearfix"></div>
        <div>
            <div id="totalarea">
                <div id="subtotal"></div><input type="hidden" id="cartsubtotal" name="cartsubtotal"/>
                <div id="shipping"></div><input type="hidden" id="cartshipping" name="cartshipping"/>
                <div id="tax"></div><input type="hidden" id="carttax" name="carttax"/>
                <div id="ordertotal"></div><input type="hidden" id="cartordertotal" name="cartordertotal"/>
            </div>
        </div>';
    $content = "<div>Cart</div>".$content;


}   
    function getItemQuantity($ic, $inventoryid){
        for($i=0;$i<count($ic); $i+=3){
            if($ic[$i]==$inventoryid){
                return $ic[$i+1]; // the current quantity
            }
        }
    }
    function getItemPrice($ic, $inventoryid){
        for($i=0;$i<count($ic); $i+=3){
            if($ic[$i]==$inventoryid){
                return $ic[$i+2]; // the current quantity
            }
        }
    }
    function processcartcookie(){


        //echo "<br/><br/><br/>cart before<br/>";
        //echo $_COOKIE["shoppingcart"];
        $cart=explode("|", $_COOKIE["shoppingcart"]);
        //echo "<br/>cart after<br/><br/><br/>";
        //print_r($cart);
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
                    $newcart=$newcart."|".$key."|".$cartitems[0]."|".$cartitems[1];
                } else {
                    $newcart=$newcart.$key."|".$cartitems[0]."|".$cartitems[1];
                }
                
            }
            // this wont show up until the page refreshes
            // so the javascript will do a location.reload
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
