<?php

class Pay_Payment_Block_Form_Babycadeaubon extends Pay_Payment_Block_Form_Abstract {

    protected $paymentMethodId = Pay_Payment_Model_Paymentmethod_Babycadeaubon::OPTION_ID;
    protected $paymentMethodName = 'Babycadeaubon';
    protected $methodCode = 'pay_payment_babycadeaubon';
    protected $template = 'pay/payment/form/default.phtml';
}
