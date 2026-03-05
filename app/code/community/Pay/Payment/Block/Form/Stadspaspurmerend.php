<?php

class Pay_Payment_Block_Form_Stadspaspurmerend extends Pay_Payment_Block_Form_Abstract {

    protected $paymentMethodId = Pay_Payment_Model_Paymentmethod_Stadspaspurmerend::OPTION_ID;
    protected $paymentMethodName = 'Stadspas Purmerend';
    protected $methodCode = 'pay_payment_stadspaspurmerend';
    protected $template = 'pay/payment/form/default.phtml';
}
