<?php

class Pay_Payment_Block_Form_Giftforgood extends Pay_Payment_Block_Form_Abstract {

    protected $paymentMethodId = Pay_Payment_Model_Paymentmethod_Giftforgood::OPTION_ID;
    protected $paymentMethodName = 'Gift for Good';
    protected $methodCode = 'pay_payment_Giftforgood';
    protected $template = 'pay/payment/form/default.phtml';
}
