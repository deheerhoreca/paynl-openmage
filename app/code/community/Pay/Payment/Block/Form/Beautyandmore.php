<?php

class Pay_Payment_Block_Form_Beautyandmore extends Pay_Payment_Block_Form_Abstract {

    protected $paymentMethodId = Pay_Payment_Model_Paymentmethod_Beautyandmore::OPTION_ID;
    protected $paymentMethodName = 'Beauty and More';
    protected $methodCode = 'pay_payment_beautyandmore';
    protected $template = 'pay/payment/form/default.phtml';
}
