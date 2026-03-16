<?php

class Pay_Payment_Block_Form_Floa extends Pay_Payment_Block_Form_Abstract {

    protected $paymentMethodId = Pay_Payment_Model_Paymentmethod_Floa::OPTION_ID;
    protected $paymentMethodName = 'Floa';
    protected $methodCode = 'pay_payment_floa';
    protected $template = 'pay/payment/form/default.phtml';
}
