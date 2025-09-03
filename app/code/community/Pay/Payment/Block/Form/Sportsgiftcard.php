<?php

class Pay_Payment_Block_Form_Sportsgiftcard extends Pay_Payment_Block_Form_Abstract {

    protected $paymentMethodId = Pay_Payment_Model_Paymentmethod_Sportsgiftcard::OPTION_ID;
    protected $paymentMethodName = 'Sports giftcard';
    protected $methodCode = 'pay_payment_sportsgiftcard';
    protected $template = 'pay/payment/form/default.phtml';
}
