<!-- <form method=post action="getresponse.php"> -->
<form method=post action="http://www.thaibookingtravel.com/gateway/payment.php">
    <input type="hidden" name="merchantID" value="48"/>
    <input type="hidden" name="merchant_code" value="MC19981"/>
    <input type="hidden" name="customerID" value="1231111"/>
    <input type="hidden" name="referenceID" value="765432124"/>
    <input type="hidden" name="key" value="<?php echo md5('kCX38Jkd6Jjwepoz'.'MC19981') ?>"/>
    <input type="hidden" name="amount" value="1.00"/>
    <input type="hidden" name="description" value="string"/>
    <input type="hidden" name="transactionTime" value="20161002094411"/>
    <input type="hidden" name="bank" value="SCB_TEST">
    <input type="hidden" name="chk" value="<?php echo md5('765432124'.'kCX38Jkd6Jjwepo'.'10') ?>"/>
    <input type="hidden" name="returnURL" value=" http://www.w3currency.com/getresponse.php"/>

    <input type="submit" name="submit" value="Submit" />
</form>
