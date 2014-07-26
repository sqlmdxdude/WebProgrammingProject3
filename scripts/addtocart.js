
function addtocart(el){
    var e=document.getElementById(el);
    var inventoryitem = el.replace(/[A-Za-z]/g,"");
    var cookie = document.cookie;
    if(cookie=="")
        document.cookie = "shoppingcart=";
    document.cookie =  document.cookie + inventoryitem+"|"+e.value+"|";
        
    alert(document.cookie);
    //document.cookie =  "shoppingcart=; expires=Thu, 01 Jan 1970 00:00:00 GMT";
}