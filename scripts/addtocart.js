function addtocart(el,price){
    var e=document.getElementById(el);
    var itemprice = document.getElementById(price);
   
   if(e.value==""){
        alert ("Please add a quantity");
        return false;
    }
	
    var inventoryitem = el.replace(/[A-Za-z]/g,"");
    if(document.cookie=="")
        document.cookie = "shoppingcart=";
    var cartitem = inventoryitem+"|"+e.value+"|"+itemprice.value;

    var cookie=document.cookie;
    if(cookie.substring(cookie.length,cookie.length-1)=="="){
        document.cookie =  document.cookie + cartitem;
    } else {
        document.cookie =  document.cookie +"|"+cartitem;
    }
    
    var sc = document.getElementById("shoppingcart");
    sc.innerHTML=parseCart();
    e.value="";
    
    //document.cookie =  "shoppingcart=; expires=Thu, 01 Jan 1970 00:00:00 GMT";
}
function totalcart(){
    var form = document.getElementById("checkout");
    var subtotal=0;

    for(i=0;i<form.length;i++){
        if(form[i].name.indexOf("price")>-1)
        { form[i+1].value= parseFloat(form[i].value) * parseInt(form[i-1].value);
          subtotal+=parseFloat(form[i].value) * parseInt(form[i-1].value); }
    }
    var _subtotal = document.getElementById("subtotal");
    _subtotal.innerHTML = "Subtotal: "+numeral(subtotal).format('$0,0.00');
    document.getElementById("cartsubtotal").value = subtotal;

    var _shipping = document.getElementById("shipping");
    var shipping = (subtotal>=50?0:15);
    _shipping.innerHTML = "Shipping: "+numeral(shipping).format('$0,0.00');
    document.getElementById("cartshipping").value = shipping;

    var _tax = document.getElementById("tax");
    var tax = subtotal * 0.07;
    _tax.innerHTML = "Tax: "+numeral(tax).format('$0,0.00');
    document.getElementById("carttax").value = tax;
    
    var _ordertotal = document.getElementById("ordertotal");
    var ordertotal = subtotal + shipping + tax;
    _ordertotal.innerHTML = "Order Total: "+numeral(ordertotal).format('$0,0.00');
    document.getElementById("cartordertotal").value = ordertotal;
    
}
function updatecart(el){
    location.reload(); 
    var e=document.getElementById(el);
    var inventoryitem = el.replace(/[A-Za-z]/g,"");
    var cart = document.cookie;
    cart = cart.replace("shoppingcart=", "").split("|");
    for(i=0;i<cart.length;i+=3){
        if(cart[i]==inventoryitem){
            cart[i+1]=e.value;
        }
    }
    document.cookie="shoppingcart="+cart.join("|");
    parseCart();
    var sc = document.getElementById("shoppingcart");
    sc.innerHTML=parseCart();
    totalcart();
    
}
function parseCart(){
    var cart = document.cookie.replace("shoppingcart=","").split("|");
    var numitemsinorder = 0;
    var subtotal=0.0;
    for(inv=0;inv<cart.length;inv+=3){
        numitemsinorder += (parseInt(cart[inv+1]) | 0);
        subtotal+= (parseFloat(cart[inv+2])*parseFloat(cart[inv+1]));
    }
    return ("Cart ("+numitemsinorder+" item(s)): "+(isNaN(subtotal)?numeral(0).format('$0,0.00'):numeral(subtotal).format('$0,0.00')));
}