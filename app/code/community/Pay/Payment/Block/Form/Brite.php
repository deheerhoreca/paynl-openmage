<?php

class Pay_Payment_Block_Form_Brite extends Pay_Payment_Block_Form_Abstract {

    protected $paymentMethodId = Pay_Payment_Model_Paymentmethod_Brite::OPTION_ID;
    protected $paymentMethodName = 'Brite';
    protected $methodCode = 'pay_payment_brite';
    protected $template = 'pay/payment/form/default.phtml';
}
