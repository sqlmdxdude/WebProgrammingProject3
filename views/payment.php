<?php 


    include_once "templates/cartview.php";
    include_once "templates/loginview.php"; 
    include_once "templates/banner.php";
    include_once "templates/menunavigation.php";
    include_once "templates/footer.php";
    include_once "templates/quicklinks.php";

setlocale(LC_MONETARY, 'en_US');

    $content='<form name="makepayment" action="payment.php" method="post">
<div class="checkouttitle">Authorize Payment <span>Credit Card:</span><input type="radio" name="paymentmethod" value="credit" checked onclick="paymenttype(this.value);"/> <span>Checking Account:</span><input type="radio" name="paymentmethod" value="checking" onclick="paymenttype(this.value);"/></div>
<div id="credit" class="payment defaultpayment isvisible paymentwindow">
<div class="">Credit Card Payment</div>
<div class="left paymenttitle">Card Number</div><div class="payinput"><input type="text" name="creditcard" id="creditcard" /></div>
<div class="left paymenttitle">Name on card</div><div class="payinput"><input type="text" name="cardownername" id="cardownername" /></div>
<div class="left paymenttitle">Expiration Date</div><div class="payinput"><input type="text" name="expiredate" id="expiredate" /></div>
<div class="left paymenttitle">Security Code</div><div class="payinput"><input type="text" name="securitycode" id="securitycode" /></div>
</div>
<div id="check" class="payment paymentwindow invisible">
<div class="">Checking Account Payment</div>
<div class="left paymenttitle">Routing Number</div><div class="payinput"><input type="text" name="routing" id="routing" /></div>
<div class="left paymenttitle">Account Number</div><div class="payinput"><input type="text" name="checking" id="checking" /></div>
<div class="left paymenttitle">Account Name</div><div class="payinput"><input type="text" name="checkingname" id="checkignname" /></div>
</div>
<div id="confirmauthorization"><p>By clicking on authorize below you agree to pay the amount of '.number_format(floatval($_POST["cartordertotal"]),2,".",",").'</p></div>
<div><input type="submit" value="Authorize Payment" /></div>
<input type="hidden" id="paymentamount" name="paymentamount" value="'.number_format(floatval($_POST["cartordertotal"]),2,".",",").'" />
</form>';
?>

