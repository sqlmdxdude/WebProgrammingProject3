
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
function parseCart(){
    var cart = document.cookie.replace("shoppingcart=","").split("|");
    var numitemsinorder = 0;
    var subtotal=0.0;
    for(inv=0;inv<cart.length;inv+=3){
        numitemsinorder += (parseInt(cart[inv+1]) | 0);
        subtotal+= (parseFloat(cart[inv+2])*parseFloat(cart[inv+1]));
    }
    return ("Cart ("+numitemsinorder+" item(s)): $"+(isNaN(subtotal)?"0.00":subtotal));
}