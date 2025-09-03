<?php

class Pay_Payment_Block_Form_Scholierenpas extends Pay_Payment_Block_Form_Abstract {

    protected $paymentMethodId = Pay_Payment_Model_Paymentmethod_Scholierenpas::OPTION_ID;
    protected $paymentMethodName = 'Scholierenpas';
    protected $methodCode = 'pay_payment_scholierenpas';
    protected $template = 'pay/payment/form/default.phtml';
}
