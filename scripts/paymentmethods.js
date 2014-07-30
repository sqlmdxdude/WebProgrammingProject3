function paymenttype(paymentmethod){
    var check = document.getElementById("check");
    var credit = document.getElementById("credit");
    if(paymentmethod=="credit"){
        check.className = check.className.replace("isvisible","invisible");
        credit.className = credit.className.replace("invisible","isvisible");
        
    } else {
        credit.className = credit.className.replace("isvisible","invisible");
        check.className = check.className.replace("invisible","isvisible");
    }
}